<header
    class="sticky z-10 h-20 bg-white border-b border-gray-200 shadow-lg header md:-mb-20 md:top-0 backdrop-filter backdrop-blur-lg bg-opacity-30">
    <div class="flex flex-row w-full h-full md:px-6 lg:w-container lg:mx-auto">
        <!-- Logo -->
        <div
            class="flex flex-row items-center justify-center w-full h-16 mt-2 overflow-hidden md:justify-start md:w-auto rounded-2xl drop-shadow-xl">
            <a href="{{ route('home') }}" class="focus:scale-150"><img
                    src="{{ asset('img/Bureau_Onbeperkte_Zaken_Logo-square.png') }}" alt="{{ __('BOZ\'s logo') }}"
                    class="w-12 transition-all scale-125 rounded-lg md:rounded-2xl h:12 md:w-auto md:h-16 hover:scale-150"></a>
        </div>

        <div class="md:ml-6 md:h-20 md:flex md:flex-row md:justify-center md:items-center">
            <div class="md:border-l-2 md:border-black md:h-12 "></div>
        </div>

        <!-- Hamburger icon -->
        <input class="hidden nav-toggle" type="checkbox" id="nav-toggle" />
        <label for="nav-toggle" class="md:hidden">
            <div class="absolute flex flex-row w-12 h-12 p-3 mt-3 border-2 border-white rounded right-6">
                <i class="fas fa-solid fa-bars fa-lg text-white items-center justify-center mt-0.5"></i>
            </div>
        </label>

        <!-- Menu -->
        <nav
            class="absolute z-10 hidden w-full mt-20 bg-pickled-bluewood md:bg-inherit md:inline md:w-auto md:static md:mt-0 animated--fade-in-down ">
            <ul class="px-6 pb-6 mt-5 md:list-none md:pb-0 md:mt-0 md:flex md:flex-row md:items-center md:h-full">

                <li class="md:inline-block"><x-nav-link class="" :href="route('home')" :active="request()->routeIs('home')">{{__('Home') }}</x-nav-link></li>
          
                <div class="dropdown hidden md:relative md:inline-block">
                    <li class="dropbtn mt-3 md:mt-0 md:inline-block md:ml-6"><x-nav-link class="">{{__('About us')}}</x-nav-link></li>
                    <div class="dropdown-content md:absolute rounded">
                        <li class="mt-3 md:mt-0 md:inline-block md:ml-6"><x-nav-link class="" :href="route('about-us.visitor.index')" :active="request()->routeIs('about-us.visitor.index')">{{__('About us')}}</x-nav-link></li>
                        <li class="mt-3 md:mt-0 md:inline-block md:ml-6"><x-nav-link class="" :href="route('recommendations')" :active="request()->routeIs('recommendations')">{{__('Recommendations')}}</x-nav-link></li>
                        <li class="mt-3 md:mt-0 md:inline-block md:ml-6"><x-nav-link class="" :href="route('partners')" :active="request()->routeIs('partners.visitor.index')">{{__('Collaborative partners')}}</x-nav-link></li>
                    </div>
                </div>
                
                <li class="mt-3 md:mt-0 md:hidden md:ml-6"><x-nav-link class="" :href="route('about-us.visitor.index')" :active="request()->routeIs('about-us.visitor.index')">{{__('About us')}}</x-nav-link></li>
                <li class="mt-3 md:mt-0 md:hidden md:ml-6"><x-nav-link class="" :href="route('recommendations')" :active="request()->routeIs('recommendations')">{{__('Recommendations')}}</x-nav-link></li>
                <li class="mt-3 md:mt-0 md:hidden md:ml-6"><x-nav-link class="" :href="route('partners')" :active="request()->routeIs('partners.visitor.index')">{{__('Samenwerkingspartners')}}</x-nav-link></li>

                <li class="mt-3 md:mt-0 md:inline-block md:ml-6"><x-nav-link class="" :href="route('projects')" :active="request()->routeIs('projects')">{{__('Projects')}}</x-nav-link></li>
                <li class="mt-3 md:mt-0 md:inline-block md:ml-6"><x-nav-link class="" :href="route('contact.visitor.index')" :active="request()->routeIs('contact.visitor.index')">{{__('Contact')}}</x-nav-link></li>
                 <li class="mt-3 md:mt-0 md:inline-block md:ml-6"><x-nav-link class="" :href="route('policy.visitor.index')" :active="request()->routeIs('policy.visitor.index')">{{__('Policy')}}</x-nav-link></li>

                <div class="dropdown mt-3 text-center">
                    <x-dropdown align="center">
                        <x-slot name="trigger">
                            <li class="mb-1 md:mt-0 md:inline-block md:ml-6 ">
                                <x-nav-link>
                                        <div class="flex items-center align-middle w-full">
                                            <span class="flex-1 ml-4">{{ __('Language') }}</span>
                                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                </x-nav-link>
                            </li>
                        </x-slot>
                        <x-slot name="content" >
                                <x-language-selector />
                        </x-slot>
                    </x-dropdown>
                </div>
                @if (Auth::user())
                    <li dusk="ToAdmin" class="mt-3 md:mt-0 md:inline-block md:ml-6 md:absolute md:right-8">
                        <x-nav-link class="" :href="route('project')">{{ __('CMS') }}</x-nav-link>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</header>
