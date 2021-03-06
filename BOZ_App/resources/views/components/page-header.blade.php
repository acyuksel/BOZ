@props(['src', 'title', 'subtitle' => '', 'wide' => false, 'small' => false])
@if(!$wide)
    <div class="relative md:px-6 lg:w-container lg:mx-auto drop-shadow-lg">
        <img class="blur-xs-sm md:blur-none md:rounded-b-2xl lg:h-128 lg:w-full lg:object-cover"
             src="{{asset($src)}}" alt="pagina header">
        <div class="md:min-w-[55%] absolute top-0 h-full px-6 flex flex-col justify-center items-center md:px-0">
            <div class="md:bg-white md:min-h-3/6 md:flex md:flex-col md:justify-center md:px-6 md:w-full">
                <h1 class="text-4xl font-bold text-center text-white md:text-pickled-bluewood md:text-5xl">{{$title}}</h1>
                <p class="mt-3 text-xl font-medium text-white md:text-pickled-bluewood md:mt-0">{{$subtitle}}</p>
            </div>
        </div>
    </div>
@else
    <div class="lg:w-full drop-shadow-lg">
        <img class="blur-xs-sm md:blur-none md:rounded-b-2xl {{$small ? 'lg:h-[30rem]' : 'lg:h-[50rem]'}} lg:w-full lg:object-cover"
             src="{{asset($src)}}" alt="pagina header">
        <div class="absolute top-0 flex flex-col items-center justify-center w-full h-full md:px-0">
            <div class="px-6 md:px-0 md:bg-white md:w-5/6 lg:min-h-1/6 lg:w-3/6 md:flex md:flex-col md:justify-center md:w-full rounded-xl drop-shadow-xl">
                <h1 class="text-4xl font-bold text-center text-white md:text-black md:text-5xl md:mt-2 lg:mt-0">{{$title}}</h1>
                @if($subtitle != '')
                <p class="text-xl font-medium text-center text-white md:text-black md:mb-2 lg:mb-0 lg:mt-4">{{$subtitle}}</p>
                @endif
            </div>
        </div>
    </div>
@endif
