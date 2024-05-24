<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Availability;
use App\Models\Slot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{
    public function index(){

        $appointments = Appointment::with('slot')->get();

//        $paginatedAppointments = Appointment::with(['slot.availability'])
//            ->join('slots', 'appointments.slot_id', '=', 'slots.id')
//            ->join('availabilities', 'slots.availability_id', '=', 'availabilities.id')
//            ->orderBy('availabilities.date', 'asc')
//            ->select('appointments.*')
//            ->paginate(8);
//
//        $appointments = $paginatedAppointments->getCollection()->groupBy(function ($appointment) {
//            return $appointment->slot->availability->date;
//        });

//        $appointments = new \Illuminate\Pagination\LengthAwarePaginator(
//            $groupedAppointments->forPage($paginatedAppointments->currentPage(), 8),
//            $groupedAppointments->count(),
//            8,
//            $paginatedAppointments->currentPage(),
//            ['path' => $paginatedAppointments->path()]
//        );


//        $appointments = Appointment::with(['slot.availability'])
//            ->join('slots', 'appointments.slot_id', '=', 'slots.id')
//            ->join('availabilities', 'slots.availability_id', '=', 'availabilities.id')
//            ->select('appointments.*')
//            ->orderBy('availabilities.date', 'asc')
//            ->groupBy('availabilities.date', 'appointments.id')
//            ->paginate(8);



        return view('admin.appointment.index',compact('appointments'));
    }

    public function create(){

        $futureAvailabilities = Availability::where('date', '>=', date('Y-m-d'))->get();
        return view('admin.appointment.create',compact('futureAvailabilities'));
    }

    public function getSlots($id){
        $slots = Slot::where('availability_id',$id)->where('status',0)->get();
        return response()->json([
            'data' => $slots,
        ]);
    }

    public function destroy($id){

        $appointment = Appointment::findOrfail($id);
        Slot::where('id',$appointment->slot_id)->update([
            'status' => 0
        ]);
        $appointment->delete();
        return back()->with('message','Record Deleted Successfully');
    }

    public function store(Request $request){

        $request->validate([
            'slot_id' => 'required',
            'client_name' => 'required',
            'client_email' => 'required',
        ]);


        $checkAppointment = Appointment::where('slot_id',$request->slot_id)->first();

        if ($checkAppointment){

            $request->session()->put('appointment', $checkAppointment);

        }else{

            $appointment = Appointment::create([
                'slot_id' => $request->slot_id,
                'client_name' => $request->client_name,
                'client_email' => $request->client_email,
                'client_number' => $request->client_number ?? '',
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

    public function edit($id){

        $futureAvailabilities = Availability::all();

        $appointment = Appointment::where('id',$id)->with('slot')->first();
        $slots = Slot::where('availability_id',$appointment->slot->availability_id)->get();
        return view('admin.appointment.edit',compact('appointment','futureAvailabilities','slots'));

    }

    public function update(Request $request){

        $appointment = Appointment::where('id', $request->appointment_id)->with('slot')->first();

             $appointment->update([
                'slot_id' => $request->slot_id,
                'client_name' => $request->client_name,
                'client_email' => $request->client_email,
                'client_number' => $request->client_number ?? '',
                 'status' => $request->status,
            ]);

            Slot::where('id',$request->slot_id)->update([
                'status' => 1
            ]);
            Slot::where('id',$appointment->slot->id)->update([
                'status' => 0
            ]);

        $newAppointment = Appointment::where('id', $request->appointment_id)->with('slot')->first();

        $date = $newAppointment->slot->availability->date;
        $start_time = $newAppointment->slot->start_time;
        $end_time = $newAppointment->slot->end_time;

        $datetimeStart = date('Y-m-d\TH:i:s', strtotime($date . ' ' . $start_time));
        $datetimeEnd = date('Y-m-d\TH:i:s', strtotime($date . ' ' . $end_time));

        $details = [
            'client_title' => 'Your Appointment Booking Rescheduled.',
            'admin_title' => 'You Reschedule an Appointment Successfully',
            'name' => $newAppointment->client_name,
            'link' => $newAppointment->meet_link,
            'date' => $date,
            'datetimeStart' => $datetimeStart,
            'datetimeEnd' => $datetimeEnd,
            'start_time' => $start_time,
            'end_time' => $end_time
        ];

//            client email
        \Mail::to($newAppointment->client_email)->send(new \App\Mail\AppointmentClientMail($details));

//            admin email
        \Mail::to(env('ADMIN_EMAIL'))->send(new \App\Mail\AppointmentAdminMail($details));

          return Redirect::route('appointment.index')->with('message', 'Record Updated Successfully');
    }


}
