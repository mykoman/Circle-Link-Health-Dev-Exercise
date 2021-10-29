@extends('layout.app')


@section('content')
<div class="p-12">
<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="flex justify-center items-center">
        <h2 class="text-lg font-large leading-6 text-gray-1200">Create Patient Information</h2>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form action="{{route('patient.store')}}" method="POST">
        @csrf
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3 m-3">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                <input type="text" name="first_name" value="{{old('first_name')}}" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              @error('first_name')
              <div class="text-red-500">
                {{$message}}
              </div>
              @enderror

              <div class="col-span-6 sm:col-span-3 m-3">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                <input type="text" name="last_name" value="{{old('last_name')}}" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              @error('last_name')
              <div class="text-red-500">
                {{$message}}
              </div>
              @enderror

              <div class="col-span-6 sm:col-span-3 m-3">
                <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle name</label>
                <input type="text" name="middle_name" value="{{old('middle_name')}}" id="middle_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              @error('middle_name')
              <div class="text-red-500">
                {{$message}}
              </div>
              @enderror

              <div class="col-span-6 sm:col-span-3 m-3">
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="text" name="email" value="{{old('email')}}" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              @error('email')
              <div class="text-red-500">
                {{$message}}
              </div>
              @enderror

              <div class="col-span-6 sm:col-span-3 m-3">
                <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" name="date_of_birth" value="{{old('date_of_birth')}}" id="date_of_birth" autocomplete="date_of_birth" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              @error('date_of_birth')
              <div class="text-red-500">
                {{$message}}
              </div>
              @enderror

              <div class="col-span-6 sm:col-span-3 m-3">
                <label for="address" class="block text-sm font-medium text-gray-700"> address</label>
                <textarea type="text" name="address" id="address" autocomplete="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"> {{old('first_name')}}</textarea>
              </div>
              @error('address')
              <div class="text-red-500">
                {{$message}}
              </div>
              @enderror
              

              <div class="col-span-6 sm:col-span-3 m-3">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" value="{{old('phone')}}" name="phone" id="phone" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              @error('phone')
              <div class="text-red-500">
                {{$message}}
              </div>
              @enderror
              
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
</div>
@endsection