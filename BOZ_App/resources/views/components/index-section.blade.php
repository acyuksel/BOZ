@props(['title', 'section'])
<section section="{{$section}}" class="px-6 mt-10 relative">
    <h2 section="{{$section}}" class="text-4xl font-medium">{{$title}}</h2>
    @auth()
    <button section="{{$section}}" editbutton="true"
            class="absolute z-10 top-0 right-6 bg-pickled-bluewood text-white font-bold px-4 py-2 rounded-xl hover:bg-gray-600 transition-colors">
        <i class="fa fa-solid fa-pencil mr-3"></i>{{__('Edit')}}
    </button>
    @endauth
    {{$slot}}
</section>
