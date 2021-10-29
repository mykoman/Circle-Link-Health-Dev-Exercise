
<x-livewire-tables::table.cell>
  {{$row->patient->first_name}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->patient->last_name}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->patient->middle_name}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->patient->phone}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->patient->email}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->systolic}}
</x-livewire-tables::table.cell>


<x-livewire-tables::table.cell>
  {{$row->diastolic}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->created_at}}
</x-livewire-tables::table.cell>
