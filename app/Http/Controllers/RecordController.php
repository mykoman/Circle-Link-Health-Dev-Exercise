<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecordCreationRequest;
use App\Models\Patient;
/**
 * @description THe class handles patients blood pressure readings
 */
class RecordController extends Controller
{
    public function create($patientId)
    {
        $patient = Patient::findOrFail($patientId);
        return view('records.create', compact('patient'));
    }

    public function store(RecordCreationRequest $request, $patientId)
    {
        
        $patient = Patient::findOrFail($patientId);
        $created_by = auth()->user()->id;
        $recordData = [
            'systolic' => $request->systolic,
            'diastolic' => $request->diastolic,
            'created_by' => $created_by
        ];

        $patient->records()->create($recordData);
        $this->flashSuccessMessage("The blood pressure record was successfully saved");
        return redirect()->route('patient.list');
    }

    public function list($patientId)
    {
        $patient = Patient::findOrFail($patientId);
        return view('records.list', compact('patient'));
    }
}
