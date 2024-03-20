<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    const type_menu = 'patients';

    //index
    public function index(Request $request)
    {
        if ($request->nik) {
            $patients = Patient::where('nik', 'like', '%' . $request->nik . '%')->paginate(10);
        } else {
            $patients = Patient::paginate(10);
        }
        return view('pages.patients.index', compact('patients'))->with('type_menu', self::type_menu);
    }
}
