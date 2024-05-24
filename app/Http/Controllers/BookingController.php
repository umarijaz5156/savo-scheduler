<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Availability;
use App\Models\Slot;
use Carbon\Carbon;
use DateTimeZone;
use Google\Service\Calendar;
use Google_Service_Calendar;
use Google_Service_Calendar_ConferenceData;
use Google_Service_Calendar_CreateConferenceRequest;
use Google_Service_Calendar_Event;

//use Google_Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PragmaRX\Countries\Package\Countries;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\Http;
use Goutte\Client;
use Google\Client as Google_Client;
use Google\Service\Calendar\ConferenceRequest;
use Google\Service\Calendar\Event;
class BookingController extends Controller
{


    public function index(){


        $timeZones = DateTimeZone::listIdentifiers(DateTimeZone::ALL);

        $currentDate = Carbon::now()->format('Y-m-d');

        $availabilities = Availability::with('slots')
            ->where('date', '>=', $currentDate)
            ->has('slots')
            ->orderBy('date', 'asc')
            ->get();


        return view('web.booking',compact('availabilities','timeZones'));
    }

    public function saveSelectedValue(Request $request){
        $timeZone = $request->timezone;

        session()->put('timezone', $timeZone);
        return response()->json(['success' => true]);
    }


    public function details($id){

        $slot_id = $id;

        $countriesData = Countries::all()->toArray();
        $countries = [];
        foreach ($countriesData as $countryData) {
            if (isset($countryData['dialling']['calling_code'][0])) {
                $countryCode = '+' . $countryData['dialling']['calling_code'][0];
                $countryName = $countryData['name']['common'];
                $countries[$countryCode] = $countryName;
            }
        }


        return view('web.booking-details',compact('slot_id','countries'));

    }

    public function store(Request $request){

        $checkAppointment = Appointment::where('slot_id',$request->slot_id)->first();

        if ($checkAppointment){
            $request->session()->put('appointment', $checkAppointment);
        }else{
            $number = $request->country_code . $request->client_number;
            $appointment = Appointment::create([
                'slot_id' => $request->slot_id,
                'client_name' => $request->client_name,
                'client_email' => $request->client_email,
                'guest_email' => $request->guest_emails ?? '',
                'client_number' => $number,
                'timezone' => Session::get('timezone') ??  env('TIME_ZONE') ?? 'Asia',
            ]);

            Slot::where('id',$request->slot_id)->update([
                'status' => 1
            ]);
            $request->session()->put('appointment', $appointment);

        }


        $credentialsPath = config_path('google-calendar-credentials.json');


        $client = new Google_Client();
        $client->setAuthConfig($credentialsPath);
        $client->setRedirectUri(route('google.calendar.callback'));
        $client->addScope(Google_Service_Calendar::CALENDAR_EVENTS);
        $client->setAccessType('offline');
        $client->setIncludeGrantedScopes(true);

        $authUrl = $client->createAuthUrl();
        return Redirect::away($authUrl);

    }


    public function callback(Request $request){

        $credentialsPath = config_path('google-calendar-credentials.json');

        $client = new Google_Client();
        $client->setAuthConfig($credentialsPath);
        $client->setRedirectUri(route('google.calendar.callback'));
        $client->addScope(Google_Service_Calendar::CALENDAR_EVENTS);
        $client->setAccessType('offline');
        $client->setIncludeGrantedScopes(true);

        if ($request->has('code')) {
            $accessToken = $client->fetchAccessTokenWithAuthCode($request->input('code'));
            $client->setAccessToken($accessToken);
            $request->session()->put('google_access_token', $accessToken);
            return redirect()->route('google.calendar.create-event');

        } else {
            $authUrl = $client->createAuthUrl();
            return redirect()->to($authUrl);
        }

    }

    public function createEvent(Request $request)
    {

        $credentialsPath = config_path('google-calendar-credentials.json');

        $client = new Google_Client();
        $client->setAuthConfig($credentialsPath);
        $client->setRedirectUri(route('google.calendar.callback'));
        $client->addScope(Google_Service_Calendar::CALENDAR_EVENTS);
        $client->setAccessType('offline');
        $client->setIncludeGrantedScopes(true);

        if ($accessToken = $request->session()->get('google_access_token')) {
            $client->setAccessToken($accessToken);

            $service = new Google_Service_Calendar($client);

              $appointment = $request->session()->get('appointment');
              $slot = Slot::where('id',$appointment->slot_id)->first();
              $availabilityy = Availability::where('id',$slot->availability_id)->first();


            $date = $availabilityy->date;
            $start_time = $slot->start_time;
            $end_time = $slot->end_time;


            $datetimeStart = date('Y-m-d\TH:i:s', strtotime($date . ' ' . $start_time));
            $datetimeEnd = date('Y-m-d\TH:i:s', strtotime($date . ' ' . $end_time));

            $event = new Google_Service_Calendar_Event([
                'summary' => env('MEETING_TITLE'),
                'start' => [
                    'dateTime' => $datetimeStart,
                    'timeZone' =>  Session::get('timezone') ??  env('TIME_ZONE') ?? 'Asia/Karachi',
                ],
                'end' => [
                    'dateTime' => $datetimeEnd,
                    'timeZone' => Session::get('timezone') ??  env('TIME_ZONE') ?? 'Asia/Karachi',
                ],
                'conferenceData' => [
                    'createRequest' => [
                        'requestId' => $appointment->slot_id,
                    ],
                ],
            ]);

            $event = $service->events->insert('primary', $event, ['conferenceDataVersion' => 1]);

            $meetLink = $event->getConferenceData()->getEntryPoints()[0]->uri;

             Appointment::where('id',$appointment->id)->update([
                'meet_link' => $meetLink
            ]);

            $details = [
                'client_title' => 'You Booked a new appointment.',
                'admin_title' => 'You Received a new appointment.',
                'name' => $appointment->client_name,
                'link' => $meetLink,
                'date' => $date,
                'datetimeStart' => $datetimeStart,
                'datetimeEnd' => $datetimeEnd,
                'start_time' => $start_time,
                'end_time' => $end_time
            ];

            try {

//            client email
                \Mail::to($appointment->client_email)->send(new \App\Mail\AppointmentClientMail($details));

//            admin email
                \Mail::to(env('ADMIN_EMAIL'))->send(new \App\Mail\AppointmentAdminMail($details));

            } catch (\Exception $e) {

            }

            if (auth::user()){
                Session::forget('google_access_token, appointment');
                return Redirect::route('appointment.index')->with('message', 'Appointment Booked Successfully');
            }

            $slot = Slot::with('appointment')->findOrFail($appointment->slot_id);
            $availability = Availability::where('id',$slot->availability_id)->first();
            return view('web.booking-confirm',compact('slot','availability','appointment'));

        } else {
            $authUrl = $client->createAuthUrl();
            return redirect()->to($authUrl);
        }
    }



}
