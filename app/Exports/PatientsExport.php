<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Queue\ShouldQueue;




class PatientsExport implements FromQuery, ShouldQueue
{

   
    use Exportable;

    
    public function query()
    {
        return Patient::query();
    }
}
