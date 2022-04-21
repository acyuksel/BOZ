@extends('layouts.app')
@section('content')
<x-frontend-media-library />
    <x-page-header src="img/headers/Djorg-camera-scaled.jpeg" title="Bureau
                    Onbeperkte Zaken" subtitle="{{__('HomeSubtitle')}}" wide="true">
    </x-page-header>

    <div class="relative block py-6 bg-white lg:mx-20 rounded-xl md:-mt-32 drop-shadow-xl">
        <div>
            @foreach($sections as $section)
                @if($loop->odd)
                    <x-index-section title="{{$section->header}}" section="{{$section->number}}">
                        <p section="{{$section->number}}" class="mt-1 text-justify">{!! $section->content !!}</p>
                    </x-index-section>
                @else
                    <x-index-card-section title="{{$section->header}}" section="{{$section->number}}">
                        <p section="{{$section->number}}" class="mt-1 text-justify">{!! $section->content !!}</p>
                    </x-index-card-section>
                @endif

                @auth()
                    <div editsection="{{$section->number}}" class="relative hidden px-6 py-5 mt-10 lg:w-container lg:mx-auto">
                        <button editsectionnr="{{$section->number}}" savebutton="true"
                                class="absolute top-0 z-10 px-4 py-2 font-bold text-white transition-colors right-6 bg-pickled-bluewood rounded-xl hover:bg-gray-600">
                            <i class="mr-3 fa fa-solid fa-pencil"></i>
                            {{__('Save')}}
                        </button>
                        <label for="header{{$section->number}}">Header name</label>
                        <input class="block w-full mt-1 mb-3 rounded" type="text" placeholder="Lorem ipsum"
                               id="header{{$section->number}}" name="header{{$section->number}}"
                               value="{{$section->header}}">
                        <label class="mb-1" for="edit">Content</label>
                        <textarea editsectionnr="{{$section->number}}" name="edit{{$section->number}}"
                                  id="edit{{$section->number}}">{{$section->content}}</textarea>
                    </div>
                    <x-index-add-section-button sectionnr="{{$section->number + 1}}"></x-index-add-section-button>
                @endauth
            @endforeach
        </div>
    </div>

    @auth()
        <form id="update-form" action="{{route('update-section')}}" method="post" hidden>
            @csrf
            @method('patch')
            <input type="number" id="section_nr" name="section_nr">
            <input type="text" id="header" name="header">
            <input type="text" name="content" id="content">
        </form>

        <form id="delete-form" action="{{route('delete-section')}}" method="post" hidden>
            @csrf
            @method('delete')
            <input type="number" id="section_nr" name="section_nr">
        </form>
    @endauth
@section('scripts')
    <script src="{{ asset('js/homepage.js')}}">
    </script>
@endsection
@endsection

