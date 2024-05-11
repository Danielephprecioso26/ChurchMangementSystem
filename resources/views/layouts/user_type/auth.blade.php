@extends('layouts.app')

@section('auth')


    @if(\Request::is('static-sign-up')) 
        @include('layouts.navbars.guest.nav')
        @yield('content')
        @include('layouts.footers.guest.footer')
    
    @elseif (\Request::is('static-sign-in')) 
        @include('layouts.navbars.guest.nav')
            @yield('content')
        @include('layouts.footers.guest.footer')
    
    @else
        @if (\Request::is('profile'))  
            @include('layouts.navbars.auth.sidebar')
            <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
                @include('layouts.navbars.auth.nav')
                @yield('content')
            </div>

        @elseif (Auth::user()->is_admin)
            @include('layouts.navbars.auth.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
        @elseif (Auth::user()->is_staff1)
            @include('layouts.navbars.staff_1.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
        @elseif (Auth::user()->is_staff2)
            @include('layouts.navbars.staff_2.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
        @endif
    @endif

    

@endsection