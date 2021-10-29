@extends('layout.app')


@section('content')
<div class=" h-screen justify-center items-center max-w-4xl">
    {{-- <div class="px-4 py-5 bg-white sm:p-6">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3 m-4">
                <label for="systolic" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="systolic" value="{{ $patient->first_name . ' ' . $patient->last_name }}" readonly
                    id="systolic" autocomplete="given-name"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3 m-4">
                <label for="diastolic" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="diastolic" value="{{ $patient->email }}" readonly id="diastolic"
                    autocomplete="family-name"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="col-span-6 sm:col-span-3 m-4">
                <label for="diastolic" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="diastolic" value="{{ $patient->phone }}" readonly id="diastolic"
                    autocomplete="family-name"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>


        </div>
    </div> --}}
    <div class="flex  justify-center items-center mb-24">
        <livewire:record-table :patient="$patient->id" />
    </div>
</div>
    @endsection
