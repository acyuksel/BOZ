@props(['active' => false])

<li class="mt-3 md:mt-0 md:inline-block md:ml-6">
    <x-nav-link :active="$active">
        <div class="flex items-center align-middle w-full">
            <span class="flex-1 ">{{$slot}}</span>
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </x-nav-link>
</li>
