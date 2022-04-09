@props(['src', 'title', 'subtitle' => '', 'wide' => false])
@if(!$wide)
    <div class="relative md:px-6 lg:w-container lg:mx-auto drop-shadow-lg">
        <img class="blur-xs-sm md:blur-none md:rounded-b-2xl lg:h-128 lg:w-full lg:object-cover"
             src="{{asset($src)}}" alt="">
        <div class="md:min-w-[55%] absolute top-0 h-full px-6 flex flex-col justify-center items-center md:px-0">
            <div class="md:bg-white md:h-3/6 md:flex md:flex-col md:justify-center md:px-6 md:w-full">
                <h1 class="text-4xl text-center text-white font-bold md:text-pickled-bluewood md:text-5xl">{{$title}}</h1>
                <p class="text-white mt-3 text-xl font-medium md:text-pickled-bluewood md:mt-0">{{$subtitle}}</p>
            </div>
        </div>
    </div>
@else
    <div class="lg:w-full drop-shadow-lg">
        <img class="blur-xs-sm md:blur-none md:rounded-b-2xl lg:h-[50rem] lg:w-full lg:object-cover"
             src="{{asset($src)}}" alt="">
        <div class="absolute top-0 h-full w-full flex flex-col justify-center items-center md:px-0">
            <div class="px-6 md:px-0 md:bg-white md:w-5/6 lg:h-1/6 lg:w-3/6 md:flex md:flex-col md:justify-center md:w-full rounded-xl drop-shadow-xl">
                <h1 class="text-4xl text-center text-white font-bold md:text-black md:text-5xl md:mt-2 lg:mt-0">{{$title}}</h1>
                <p class="text-white text-xl font-medium md:text-black text-center md:mb-2 lg:mb-0 lg:mt-4">{{$subtitle}}</p>
            </div>
        </div>
    </div>
@endif
