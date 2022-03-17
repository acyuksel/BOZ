@props(['title', 'section'])
<div section="{{$section}}" class="mx-2 bg-gray-200 rounded-xl drop-shadow-md">
    <section section="{{$section}}" class="px-4 py-4 mt-10 relative">
        <h2 section="{{$section}}" class="text-4xl font-medium">{{$title}}</h2>
        @auth()
        <button section="{{$section}}" editbutton="true"
                class="absolute z-10 mt-4 top-0 right-4 bg-pickled-bluewood text-white font-bold px-4 py-2 rounded-xl hover:bg-gray-600 transition-colors">
            <i class="fa fa-solid fa-pencil mr-3"></i>{{__('Edit')}}
        </button>
        @endauth
        {{$slot}}
    </section>
</div>
