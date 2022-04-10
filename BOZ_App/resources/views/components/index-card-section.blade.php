@props(['title', 'section'])
<div section="{{$section}}" class="mx-2 bg-gray-200 rounded-xl">
    <section section="{{$section}}" class="lg:w-container lg:mx-auto px-4 py-10 mt-10 mb-20 relative">
        <h2 section="{{$section}}" class="text-4xl font-medium">{{$title}}</h2>
        @auth()
            <div class="absolute z-10 mt-4 -top-3 md:top-6 right-4">
                <button section="{{$section}}" editbutton="true"
                        class="bg-pickled-bluewood text-white font-bold px-4 py-2 rounded-xl hover:bg-gray-600 transition-colors">
                    <i class="fa fa-solid fa-pencil mr-3"></i>{{__('Edit')}}
                </button>
                <button section="{{$section}}" deletebutton="true" alertmessage="{{__('Confirm deletion')}}"
                        class="bg-white border border-pickled-bluewood text-white font-bold px-4 py-2 rounded-xl text-red-500 hover:bg-gray-600 hover:text-white transition-colors">
                    <i class="pointer-events-none fa fa-solid fa-trash"></i>
                </button>
            </div>
        @endauth
        {{$slot}}
    </section>
</div>
