<?php

namespace App\Http\Livewire;

use App\Exports\PatientsExport;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Patient;
use Maatwebsite\Excel\Facades\Excel;

class PatientTable extends DataTableComponent
{

    public array $bulkActions = [
        'exportSelected' => 'Export',
    ];

    public function columns(): array
    {
        return [
            Column::make('id')->searchable(),
            Column::make('first name')->searchable(),
            Column::make('last name')->searchable(),
            Column::make('middle name'),
            Column::make('phone')->searchable(),
            Column::make('email')->searchable(),
            Column::make('date of birth'),
            Column::make('record'),
        ];
    }

    public function query(): Builder
    {
        return Patient::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.patient_table';
    }

    public function exportSelected()
    {
        
        return Excel::download(new PatientsExport, 'patient.csv'); 
    }
}
