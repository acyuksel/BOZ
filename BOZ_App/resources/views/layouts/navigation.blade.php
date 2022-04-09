<header class="h-20 border-b shadow-lg header sticky md:-mb-20 md:top-0 z-10 backdrop-filter backdrop-blur-lg bg-opacity-30 bg-white border-b border-gray-200">
    <div class="flex flex-row w-full h-full md:px-6 lg:w-container lg:mx-auto">
        <!-- Logo -->
        <div class="flex flex-row items-center justify-center w-full md:justify-start md:w-auto overflow-hidden rounded-2xl h-16 mt-2 drop-shadow-xl">
            <a href="{{route('home')}}"><img src="{{asset('img/Bureau_Onbeperkte_Zaken_Logo-square.png')}}" alt="{{__('BOZ\'s logo')}}" class="rounded-lg md:rounded-2xl w-12 h:12 md:w-auto md:h-16 scale-125 hover:scale-150 transition-all"></a>
        </div>

        <div class="md:ml-6 md:h-20 md:flex md:flex-row md:justify-center md:items-center"><div class="md:border-l-2 md:border-black md:h-12 "></div></div>

        <!-- Hamburger icon -->
        <input class="hidden nav-toggle" type="checkbox" id="nav-toggle"/>
        <label for="nav-toggle" class="md:hidden">
            <div class="absolute flex flex-row w-12 h-12 p-3 mt-3 border border-2 border-white rounded right-6">
                <i class="fas fa-solid fa-bars fa-lg text-white items-center justify-center mt-0.5"></i>
            </div>
        </label>

        <!-- Menu -->
        <nav class="absolute hidden bg-pickled-bluewood md:bg-inherit w-full mt-20 md:inline md:w-auto md:static md:mt-0 animated--fade-in-down z-10 ">
            <ul class="px-6 pb-6 mt-5 md:list-none md:pb-0 md:mt-0 md:flex md:flex-row md:items-center md:h-full">
                <li class="md:inline-block"><x-nav-link class="" :href="route('home')" :active="request()->routeIs('home')">{{__('Home')}}</x-nav-link></li>
                <li class="mt-3 md:mt-0 md:inline-block md:ml-6"><x-nav-link class="" :href="route('projects')" :active="request()->routeIs('projects')">{{__('Projecten')}}</x-nav-link></li>
            </ul>
        </nav>
{{--        <x-language-selector></x-language-selector>--}}
    </div>
</header>
