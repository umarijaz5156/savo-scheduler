<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Availability;
use App\Models\Slot;
use DateTime;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{


    public function index(){
        $availabilities = Availability::paginate(10);


        return view('admin.availability.index',compact('availabilities'));
    }
    public function create(){
        return view('admin.availability.create');
    }

    public function store(Request $request){
         $request->validate([
             'date' => 'required|array',
            'start_time' => 'required|array',
            'end_time' => 'required|array',
            'duration' => 'required|array',
            'duration.*' => 'required|int',
        ]);

        $inputData = $request->only(['date', 'start_time', 'end_time', 'duration']);

        foreach ($inputData['date'] as $key => $date) {

            $existingAvailability = Availability::where('date', $date)->first();
            if ($existingAvailability) {
                return back()->with('error', 'The date ' . $date . ' already exists in the database.');
            }

            $availability = new Availability();
            $availability->day = date('l', strtotime($date));
            $availability->date = $date;
            $availability->start_time = $inputData['start_time'][$key];
            $availability->end_time = $inputData['end_time'][$key];
            $availability->duration = $inputData['duration'][$key];
            $availability->save();

            $slots = $this->createSlots($availability);

            $availability->slots()->saveMany($slots);
        }


        return redirect(route('availability.index'))->with('message','Record Created Successfully');
    }



    public function edit($id){
        $availability = Availability::findOrfail($id);
        return view('admin.availability.edit',compact('availability'));
    }

    public function update(Request $request){
        $availability = Availability::findOrfail($request->id);

        $conflictingAvailability = Availability::where('date', $request->date)
            ->where('id', '!=', $availability->id)
            ->first();


        if ($conflictingAvailability) {
            return back()->with('error', 'The selected date conflicts with an existing availability.');
        }

        $availability->update([
        'day' => date('l', strtotime($request->date)),
        'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'duration' => $request->duration,
        ]);

        Slot::where('availability_id', $availability->id)->delete();

        $slots = $this->createSlots($availability);
        $availability->slots()->saveMany($slots);

        return back()->with('message','Record Update Successfully');

    }

    public function destroy($id){

        $availability = Availability::findOrfail($id);
        $availability->delete();
        $slots = Slot::where('availability_id',$id)->get();
        foreach ($slots as $slot) {
            Appointment::where('slot_id', $slot->id)->delete();
        }
        Slot::where('availability_id', $id)->delete();

        return back()->with('message','Record Deleted Successfully');


    }

    private function createSlots($availability)
    {
        $slots = [];
        $start = strtotime($availability->start_time);
        $end = strtotime($availability->end_time);
        $duration = $availability->duration * 60;

        while ($start + $duration <= $end) {
            $slot = new Slot();
            $slot->availability_id = $availability->id;
            $slot->start_time = date('H:i:s', $start);
            $slot->end_time = date('H:i:s', $start + $duration);
            $slots[] = $slot;
            $start += $duration;
        }
        return $slots;
    }
}
