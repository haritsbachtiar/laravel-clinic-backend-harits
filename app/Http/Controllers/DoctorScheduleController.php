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
            'doctor_id' => 'required'
        ]);

        if ($request->monday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Monday';
            $doctorSchedule->time = $request->monday;
            $doctorSchedule->save();
        }

        if ($request->tuesday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Tuesday';
            $doctorSchedule->time = $request->tuesday;
            $doctorSchedule->save();
        }

        if ($request->wednesday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Wednesday';
            $doctorSchedule->time = $request->wednesday;
            $doctorSchedule->save();
        }

        if ($request->thursday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Thursday';
            $doctorSchedule->time = $request->thursday;
            $doctorSchedule->save();
        }

        if ($request->friday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Friday';
            $doctorSchedule->time = $request->friday;
            $doctorSchedule->save();
        }

        if ($request->saturday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Saturday';
            $doctorSchedule->time = $request->saturday;
            $doctorSchedule->save();
        }

        if ($request->sunday) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Sunday';
            $doctorSchedule->time = $request->sunday;
            $doctorSchedule->save();
        }

        return redirect()->route('doctor_schedule.index')->with('type_menu', self::type_menu)->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $doctorSchedule = DoctorSchedule::find($id);
        $doctors = Doctor::all();
        return view('pages.doctor_schedule.edit', compact('doctorSchedule', 'doctors'))->with('type_menu', self::type_menu);
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
