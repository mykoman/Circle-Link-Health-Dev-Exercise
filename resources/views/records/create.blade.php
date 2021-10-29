@extends('layout.app')


@section('content')
<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">

    <div class="md:col-span-1">
      <div class="flex justify-center items-center">
        <h2 class="text-lg font-large leading-6 text-gray-1200">Record Blood Pressure Reading</h2>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{route('record.store', $patient->id)}}" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">


          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3 m-3">
                <label for="systolic" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="systolic" value="{{$patient->first_name." ".$patient->last_name}}" readonly id="systolic" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 m-3">
                <label for="diastolic" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="diastolic" value="{{$patient->email}}" readonly id="diastolic" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              
              <div class="col-span-6 sm:col-span-3 m-3">
                <label for="diastolic" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="diastolic" value="{{$patient->phone}}" readonly id="diastolic" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3 m-3">
                  <label for="systolic" class="block text-sm font-medium text-gray-700">Systolic Reading</label>
                  <input type="text" name="systolic" value="{{old('systolic')}}" id="systolic" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                @error('systolic')
                <div class="text-red-500">
                  {{$message}}
                </div>
                @enderror
  
                <div class="col-span-6 sm:col-span-3 m-3">
                  <label for="diastolic" class="block text-sm font-medium text-gray-700">Diastolic Reading</label>
                  <input type="text" name="diastolic" value="{{old('diastolic')}}" id="diastolic" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                
                @error('diastolic')
                <div class="text-red-500">
                  {{$message}}
                </div>
                @enderror
            </div>
          </div>


          
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-black bg-gray-300 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection