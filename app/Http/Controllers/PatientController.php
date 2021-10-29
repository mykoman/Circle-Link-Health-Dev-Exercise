<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientCreationRequest;
use App\Models\Patient;

class PatientController extends Controller
{
    public function create()
    {
        return view('patients.create');
    }

    public function store(PatientCreationRequest $request)
    {
        
        $created_by = auth()->user()->id;
        $patientData = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
            'created_by' => $created_by
            
        ];

        Patient::create($patientData);
        $this->flashSuccessMessage("Patient successfully created");
        return redirect()->route('patient.create');
    }

    public function list()
    {
        return view('patients.list');
        // return view('livewire-tables.rows.patient_table', compact('patients'));
    }

    public function details($id)
    {
        return Patient::findOrFail($id);
    }
}
