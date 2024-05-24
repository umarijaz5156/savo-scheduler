<?php

namespace App\Console\Commands;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SendAppointmentReminders extends Command
{



    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send appointment reminders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::now()->toDateString();


        $appointments = Appointment::join('slots', 'appointments.slot_id', '=', 'slots.id')
            ->join('availabilities', 'slots.availability_id', '=', 'availabilities.id')
            ->whereDate('availabilities.date', $today)
            ->get();

        foreach ($appointments as $appointment) {
            $clientEmail = $appointment->client_email;
            $adminEmail = env('ADMIN_EMAIL');

            $date = $appointment->date;
            $start_time = $appointment->start_time;
            $end_time = $appointment->end_time;

            $datetimeStart = date('Y-m-d\TH:i:s', strtotime($date . ' ' . $start_time));
            $datetimeEnd = date('Y-m-d\TH:i:s', strtotime($date . ' ' . $end_time));

            $details = [
                'client_title' => 'Reminder Email: To your appointment is Booked.',
                'admin_title' => 'Reminder Email: Your Booked appointment',
                'name' => $appointment->client_name,
                'link' => $appointment->meet_link,
                'date' => $date,
                'datetimeStart' => $datetimeStart,
                'datetimeEnd' => $datetimeEnd,
                'start_time' => $start_time,
                'end_time' => $end_time
            ];

//            client email
            \Mail::to($clientEmail)->send(new \App\Mail\AppointmentClientMail($details));

//            admin email
            \Mail::to($adminEmail)->send(new \App\Mail\AppointmentAdminMail($details));

        }

        $this->info('Appointment reminders sent successfully.');
    }
}
