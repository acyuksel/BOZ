@props(['src', 'title', 'content', 'href'])
<a href="{{$href}}" class="block mt-10 md:mt-0">
    <article
        class="flex flex-col rounded-lg overflow-hidden border-solid border drop-shadow-lg shadow-pickled-bluewood drop-shadow-lg hover:scale-105 transition">
        <div class="flex h-72 justify-center items-center">
            <div class="w-full absolute top-0">
                <div
                    class="absolute top-0 w-full h-full bg-tradewind opacity-50 hover:opacity-90 transition"></div>
                <img src="{{asset($src)}}" alt="header" class="object-cover w-full h-full">
            </div>
            <div class="px-2 z-10 pointer-events-none text-white text-center">
                <h2 class="text-4xl font-medium">{{$title}}</h2>
                <p class="mt-2  text-center" >{!! Illuminate\Support\Str::substr(html_entity_decode($content),0,150)   !!}</p> 
            </div>
        </div>
    </article>
</a>
