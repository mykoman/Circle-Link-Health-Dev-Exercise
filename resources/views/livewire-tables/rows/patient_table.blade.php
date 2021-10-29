  
<x-livewire-tables::table.cell>
  {{$row->id}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->first_name}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->last_name}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->middle_name}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->phone}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->email}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  {{$row->date_of_birth}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-black bg-gray-300 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{route('record.create', $row->id)}}">Add Record</a>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
  <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-black bg-gray-300 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{route('record.list', $row->id)}}">View History</a>
</x-livewire-tables::table.cell>