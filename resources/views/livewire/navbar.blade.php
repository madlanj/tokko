<div class="fixed w-full top-0">
    @if (Route::has('login'))
        <div class="flex items-center flex-wrap bg-pink-600 text-white p-4">
            <div class="flex-1">
                <a href="{{route('index')}}">
                    <h1 class="font-bold md:ml-12 items-center flex">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag h-8 w-8"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    <span class="text-3xl ml-2">Tokko</span>
                </h1>
                </a>
            </div>
            <div class="justify-end md:mr-12">
                @auth
                    <a href="{{ url('/home') }}" class="">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-bold mr-2">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-bold">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    @endif
</div>