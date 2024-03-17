<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
{
    const type_menu = 'doctor_schedule';
    //
    public function index(Request $request)
    {
        $doctorSchedule = DoctorSchedule::with('doctor')
            ->when($request->input('doctor_id'), function ($query, $doctor_id) {
                return $query->where('doctor_id', $doctor_id);
            })
            ->orderBy('doctor_id', 'asc')
            ->paginate(10);
        return view('pages.doctor_schedule.index', compact('doctorSchedule'))->with('type_menu', self::type_menu);
    }

    public function create()
    {
        $doctors = Doctor::all();
        return view('pages.doctor_schedule.create', compact('doctors'))->with('type_menu', self::type_menu);
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required',
            'day' => 'required',
            'time' => 'required',
        ]);

        $doctorSchedule = new DoctorSchedule;
        $doctorSchedule->doctor_id = $request->doctor_id;
        $doctorSchedule->day = $request->day;
        $doctorSchedule->time = $request->time;
        $doctorSchedule->status = $request->status;
        $doctorSchedule->note = $request->note;
        $doctorSchedule->save();

        return redirect()->route('doctor_schedules.index')->with('type_menu', self::type_menu);
    }

    public function edit($id)
    {
        $doctorSchedule = DoctorSchedule::find($id);
        $doctors = Doctor::all();
        return view('pages.doctor_schedules.edit', compact('doctorSchedule', 'doctors'))->with('type_menu', self::type_menu);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required',
            'day' => 'required',
            'time' => 'required',
        ]);

        $doctorSchedule = new DoctorSchedule;
        $doctorSchedule->doctor_id = $request->doctor_id;
        $doctorSchedule->day = $request->day;
        $doctorSchedule->time = $request->time;
        $doctorSchedule->status = $request->status;
        $doctorSchedule->note = $request->note;
        $doctorSchedule->save();

        return redirect()->route('doctor_schedule.index')->with('type_menu', self::type_menu);
    }

    public function destroy($id)
    {
        DoctorSchedule::find($id)->delete();
        return redirect()->route('doctor_schedule.index');
    }
}
