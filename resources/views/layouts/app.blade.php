<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partials.head')
    
    <body class="bg-gray-200">
        <livewire:navbar/>
            <div class="h-full overflow-y-auto mt-20">
                <div class="container mx-auto p-2">
                    @yield('content')
                    {{-- {{ $slot }} --}}
                </div>
            </div>

        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script> 
    </body>
</html>
