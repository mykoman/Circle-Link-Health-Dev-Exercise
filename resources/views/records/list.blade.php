@extends('layout.app')


@section('content')
<div class=" h-screen justify-center items-center max-w-4xl">
    
    <div class="flex  justify-center items-center mb-24">
        <livewire:record-table :patient="$patient->id" />
    </div>
</div>
    @endsection
