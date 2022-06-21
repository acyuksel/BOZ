<header
    class="sticky z-10 h-20 bg-white border-b border-gray-200 shadow-lg header md:-mb-20 md:top-0 backdrop-filter backdrop-blur-lg bg-opacity-30">
    <div class="flex flex-row w-full h-full md:px-6 lg:w-container lg:mx-auto">
        <!-- Logo -->
        <div
            class="flex flex-row items-center justify-center w-full h-16 mt-2 overflow-hidden md:justify-start md:w-auto rounded-2xl drop-shadow-xl">
            <a href="{{ route('home') }}" class="focus:scale-150">
                <img src="{{ asset('img/Bureau_Onbeperkte_Zaken_Logo-square.png') }}" alt="{{ __('BOZ\'s logo') }}"
                    class="w-12 transition-all scale-125 rounded-lg md:rounded-2xl h:12 md:w-auto md:h-16 hover:scale-150">
            </a>
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
                <li class="md:inline-block">
                    <x-nav-link class="" :href="route('home')" :active="request()->routeIs('home')">{{ __('Home') }}
                    </x-nav-link>
                </li>


                <li role="menuitem" aria-haspopup="true">
                    <div class="relative" x-data="{ open: false }" @click.outside="open = false"
                        @close.stop="open = false" >
                        <div @click="open = !open" >
                            <div class="mt-3 md:mt-0 md:inline-block md:ml-6">
                                @php
                                $classes =
                                (request()->routeIs('about-us.visitor.index')||request()->routeIs('recommendations')||request()->routeIs('partners'))
                                ? 'py-3 text-center bg-white rounded border-b-8 border-fountain-blue box-content block
                                px-4 drop-shadow-lg md:text-black text-xl font-bold md:inline-block md:text-2xl
                                md:whitespace-nowrap md:border-b-0 md:py-1 md:hover:bg-gray-200 transition-colors
                                ease-in'
                                : 'py-3 text-center bg-white rounded box-border block px-4 drop-shadow-lg text-black
                                text-xl font-bold md:inline-block md:bg-inherit md:text-black md:font-medium md:text-2xl
                                md:whitespace-nowrap md:py-1 md:px-0 md:hover:border-b-2 md:border-black
                                md:transition-all ease-in';
                                @endphp
                                <a class="{{$classes}}">
                                    <div class="flex items-center w-full align-middle">
                                        <span class="flex-1 ">{{ __('About us') }}</span>
                                        <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute z-50 mt-2 shadow-lg origin-top-left left-0" style="display: none;">
                                <div class="w-full rounded ring-1 ring-black ring-opacity-5 py-1 bg-white">
                                @php
                                    $activeClasses = 'border-b-8 border-b-pickled-bluewood font-bold';
                                @endphp
                                    <ul role="menu" class="flex flex-col w-full gap-3 px-2 mt-2 mb-3">
                                        <li role="menuitem"
                                            class="py-3 text-center bg-white rounded  px-4 ease-in w-full border border-slate-200 hover:bg-slate-200 inline-block {{ (request()->routeIs('about-us.visitor.index') ? $activeClasses : '')}}">
                                            <a href="{{ route('about-us.visitor.index') }}">
                                                {{ __('About us') }}
                                            </a>
                                        </li>
                                        <li role="menuitem"
                                            class="py-3 text-center bg-white rounded  px-4 ease-in w-full border border-slate-200 hover:bg-slate-200 inline-block {{ (request()->routeIs('recommendations') ? $activeClasses : '')}}">
                                            <a href="{{route('recommendations')}}">
                                                {{ __('Recommendations') }}
                                            </a>
                                        </li>
                                        <li role="menuitem"
                                            class="py-3 text-center bg-white rounded  px-4 ease-in w-full border border-slate-200 hover:bg-slate-200 inline-block {{ (request()->routeIs('partners') ? $activeClasses : '')}}">
                                            <a href="{{route('partners')}}">
                                                {{ __('Collaborative partners') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mt-3 md:mt-0 md:inline-block md:ml-6">
                    <x-nav-link class="" :href="route('projects')" :active="request()->routeIs('projects')">
                        {{ __('Projects') }}
                    </x-nav-link>
                </li>
                <li class="mt-3 md:mt-0 md:inline-block md:ml-6">
                    <x-nav-link class="" :href="route('contact.visitor.index')"
                        :active="request()->routeIs('contact.visitor.index')">{{ __('Contact') }}
                    </x-nav-link>
                </li>
                <li class="mt-3 md:mt-0 md:inline-block md:ml-6">
                    <x-nav-link class="" :href="route('policy.visitor.index')"
                        :active="request()->routeIs('policy.visitor.index')">
                        {{ __('Policy') }}
                    </x-nav-link>
                </li>

                <li role="menuitem" aria-haspopup="true">
                    <div class="relative" x-data="{ open: false }" @click.outside="open = false"
                        @close.stop="open = false" >
                        <div @click="open = !open" >
                            <div class="mt-3 md:mt-0 md:inline-block md:ml-6">
                                <a class="py-3 text-center bg-white rounded box-border block px-4 drop-shadow-lg text-black text-xl font-bold md:inline-block md:bg-inherit md:text-black md:font-medium md:text-2xl md:whitespace-nowrap md:py-1 md:px-0 md:hover:border-b-2 md:border-black md:transition-all ease-in">
                                    <div class="flex items-center w-full align-middle">
                                        <span class="flex-1 ">{{ __('Language') }}</span>
                                        <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute z-50 mt-2 shadow-lg origin-top-left left-0" style="display: none;">
                                <div class="w-full rounded ring-1 ring-black ring-opacity-5 py-1 bg-white">
                                    <ul role="menu" class="flex flex-col w-full gap-3 px-2 mt-2 mb-3">
                                       <ul role="menu">
                                            <x-language-selector />
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                

                @if (Auth::user())
                <li dusk="ToAdmin" class="mt-3 md:mt-0 md:inline-block md:ml-6 md:absolute md:right-8">
                    <x-nav-link class="" :href="route('project')">{{ __('CMS') }}</x-nav-link>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</header>
