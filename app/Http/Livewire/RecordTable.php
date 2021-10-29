<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Record;

class RecordTable extends DataTableComponent
{
    public $patient;

    public function columns(): array
    {
        return [
            Column::make('First Name'),
            Column::make('Last Name'),
            Column::make('Middle Name'),
            Column::make('Phone'),
            Column::make('Email'),
            Column::make('systolic')->sortable()->searchable(),
            Column::make('diastolic')->sortable()->searchable(),
            Column::make('created_at')->sortable()->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Record::where('patient_id', $this->patient);
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.record_table';
    }
}
