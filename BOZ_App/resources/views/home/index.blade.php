@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/Djorg-camera-scaled.jpeg" title="Bureau
                    Onbeperkte Zaken" subtitle="De maatschappij is het
                    probleem, niet de mens met de beperking">
    </x-page-header>

    <div class="lg:w-container lg:mx-auto w-full">
        @foreach($sections as $section)
            @if($loop->odd)
                <x-index-section title="{{$section->nl_header}}" section="{{$section->number}}">
                    <p section="{{$section->number}}" class="mt-1 text-justify">{{$section->nl_content}}</p>
                </x-index-section>
            @else
                <x-index-card-section title="{{$section->nl_header}}" section="{{$section->number}}">
                    <p section="{{$section->number}}" class="mt-1 text-justify">{{$section->nl_content}}</p>
                </x-index-card-section>
            @endif

            @auth()
                <div editsection="{{$section->number}}" class="px-6 py-5 mt-10 hidden relative">
                    <button editsectionnr="{{$section->number}}" savebutton="true"
                            class="absolute top-0 right-6 z-10 bg-pickled-bluewood text-white font-bold px-4 py-2 rounded-xl hover:bg-gray-600 transition-colors">
                        <i class="fa fa-solid fa-pencil mr-3"></i>
                        {{__('Save')}}
                    </button>
                    <label for="name">Header name</label>
                    <input class="block mt-1 w-full rounded mb-3" type="text" placeholder="Lorem ipsum" name="header"
                           value="{{$section->nl_header}}">
                    <label class="mb-1" for="edit">Content</label>
                    <textarea editsectionnr="{{$section->number}}" name="edit{{$section->number}}"
                              id="edit{{$section->number}}">{{$section->nl_content}}</textarea>
                </div>
                <div class="flex justify-center items-center mt-5">
                    <button
                        class="z-10 rounded-full bg-pickled-bluewood w-10 h-10 flex flex-row justify-center items-center text-white hover:bg-gray-600 transition-colors">
                        <i class="fa fa-solid fa-plus"></i>
                    </button>
                </div>
            @endauth
        @endforeach
    </div>
@section('scripts')
    <script src="{{ asset('js/homepage.js')}}">
    </script>
@endsection
@endsection

