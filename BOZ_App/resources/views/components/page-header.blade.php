@props(['src', 'title', 'subtitle' => ''])
<div class="relative md:px-6 lg:w-container lg:mx-auto drop-shadow-lg">
    <img class="blur-xs-sm md:blur-none md:rounded-b-2xl lg:h-128 lg:w-full lg:object-cover"
         src="{{asset($src)}}" alt="">
    <div class="absolute top-0 h-full px-6 flex flex-col justify-center items-center md:px-0">
        <div class=" md:bg-white md:h-3/6 md:flex md:flex-col md:justify-center md:px-6">
            <h1 class="text-4xl text-center text-white font-bold md:text-pickled-bluewood md:text-5xl">{{$title}}</h1>
            <p class="text-white mt-3 text-xl font-medium md:text-pickled-bluewood md:mt-0">{{$subtitle}}</p>
        </div>
    </div>
</div>
