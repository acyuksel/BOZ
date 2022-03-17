<header class="h-20 border-b shadow-lg header bg-fountain-blue border-fountain-blue">
    <div class="flex flex-row w-full h-full md:px-6 lg:w-container lg:mx-auto">
        <!-- Logo -->
        <div class="flex flex-row items-center justify-center w-full md:justify-start md:w-auto">
            <a href="{{route('home')}}"><img src="{{asset('img/Bureau_Onbeperkte_Zaken_Logo.png')}}" alt="{{__('BOZ\'s logo')}}" class="w-auto h-16"></a>
        </div>

        <div class="md:ml-6 md:h-20 md:flex md:flex-row md:justify-center md:items-center"><div class="md:border-l-2 md:border-white md:h-12 "></div></div>

        <!-- Hamburger icon -->
        <input class="hidden nav-toggle" type="checkbox" id="nav-toggle"/>
        <label for="nav-toggle" class="md:hidden">
            <div class="absolute flex flex-row w-12 h-12 p-3 mt-3 border border-2 border-white rounded right-6">
                <i class="fas fa-solid fa-bars fa-lg text-white items-center justify-center mt-0.5"></i>
            </div>
        </label>

        <!-- Menu -->
        <nav class="absolute hidden w-full mt-20 bg-fountain-blue md:inline md:w-auto md:static md:mt-0 animated--fade-in-down">
            <ul class="px-6 pb-6 mt-5 md:list-none md:pb-0 md:mt-0 md:flex md:flex-row md:items-center md:h-full">
                <li class="md:inline-block"><x-nav-link class="" :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-link></li>
                <li class="mt-3 md:mt-0 md:inline-block md:ml-6"><x-nav-link class="" :href="route('dashboard')" :active="request()->routeIs('dashboard')">Contact</x-nav-link></li>
            </ul>
        </nav>
    </div>
</header>
