<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Circle Link Health Dev Exercise</title>
  <meta name="description" content="Sample test for laravel developer">
  <meta name="author" content="Michel Ogbuma">
  <link href="{{asset('css/app.css')}}" />
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    @livewireStyles
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
 
@auth

<div class="min-h-full">
  <nav class="bg-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-12 w-36 mr-8" src="https://secureservercdn.net/198.71.189.253/eb5.896.myftpupload.com/wp-content/uploads/2020/07/CircleLink-Health-Trademark-Logo.png" alt="Circle Link Health">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-800 hover:bg-gray-700 hover:text-white" -->
              

              <a href="{{route('patient.create')}}" class="text-gray-800 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register Patient</a>

              <a href="{{route("patient.list")}}" class="text-gray-800 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">View Patients</a>

            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <!-- Profile dropdown -->
            <div x-data="{ open: false }" class="ml-3 relative">
              <div>
                <button type="button" class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img   @click="open = !open" class="h-8 w-8 rounded-full" src="https://idronline.org/wp-content/uploads/2021/01/Screen-Shot-2019-02-19-at-1.23.40-PM-300x300-3.jpg" alt="">
                </button>
              </div>

              
              <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <form method="POST" action="{{route('logout.logout')}}">
                  @csrf
                <button x-show="open" type="submit" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-800 hover:bg-gray-700 hover:text-white" -->
        

        <a href="{{route('patient.create')}}" class="text-gray-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Register Patient</a>

        <a href="{{route('patient.list')}}" class="text-gray-800 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">View Patients</a>


      </div>
      <div class="pt-4 pb-3 border-t border-gray-700">
        
        <div class="mt-3 px-2 space-y-1">
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign out</a>
        </div>
      </div>
    </div>
  </nav>

  
</div>
@endauth


    @if(session('success'))
    <div class="bg-green-400 h-40 m-8 p-4 flex  justify-center items-center">
      <p>{{session('success')}}</p>
    </div>
    @endif

    @if(session('error'))
    <div class="bg-red-400 h-40 m-8 p-4 flex  justify-center items-center">
      <p>{{session('error')}}</p>
    </div>
    @endif

    @if(session('info'))
    <div class="bg-blue-400 h-40 m-8 p-4 flex  justify-center items-center">
      <p>{{session('info')}}</p>
    </div>
    @endif
  @yield('content')


  <footer class="relative bg-gray-300 pt-8 pb-6">
    <div
      
      style="height: 80px;"
    >
      <svg
        class="absolute bottom-0 overflow-hidden"
        xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="none"
        version="1.1"
        viewBox="0 0 2560 100"
        x="0"
        y="0"
      >
        
      </svg>
    </div>
    <div class="container mx-auto px-4">
      
      <hr class="my-6 border-gray-400" />
      <div
        class="flex flex-wrap items-center md:justify-between justify-center"
      >
        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
          <div class="text-sm text-gray-600 font-semibold py-1">
            Copyright © Circle Link Health
            
          </div>
        </div>
      </div>
    </div>
  </footer>

  @livewireScripts
</body>
</html>