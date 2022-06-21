@props(['src', 'title', 'content', 'href'])
<a href="{{$href}}" class="block mt-10 md:mt-0">
    <article
        class="flex flex-col overflow-hidden transition border border-solid rounded-lg drop-shadow-lg shadow-pickled-bluewood hover:scale-105">
        <div class="flex items-center justify-center h-72">
            <div class="absolute top-0 w-full">
                <div
                    class="absolute top-0 w-full h-full transition opacity-50 bg-tradewind hover:opacity-90"></div>
                <img src="{{asset($src)}}" alt="{{$title}}" class="object-cover w-full h-full">
            </div>
            <div class="z-10 px-2 text-center text-white pointer-events-none">
                <h2 class="text-4xl font-medium">{{$title}}</h2>
                <p class="mt-2 text-center" >{!! Illuminate\Support\Str::substr(html_entity_decode($content),0,150)   !!}</p> 
            </div>
        </div>
    </article>
</a>
