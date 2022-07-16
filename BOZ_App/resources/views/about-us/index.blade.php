@extends('layouts.app')
@section('content')
    <x-frontend-media-library />
    <x-page-header src="img/headers/Djorg-camera-scaled.jpeg" title="{{__('About us')}}" wide="true" small="true">
    </x-page-header>
    <div class="relative block px-8 py-6 -mt-8 bg-cosmic-latte lg:mx-40 rounded-xl md:-mt-16 min-h-128 drop-shadow-xl">
        @auth()
            <form action="{{route('update-about-us')}}" method="post" class="lg:max-w-container lg:mx-auto">
                @csrf
                <div class="flex justify-end mb-4">
                    <button dusk="editbtn" editbutton="true"
                            class="z-10 px-4 py-2 font-bold text-white transition-colors bg-pickled-bluewood rounded-xl hover:bg-gray-600">
                        <i class="mr-3 fa fa-solid fa-pencil"></i>
                        {{__('Edit')}}
                    </button>
                    <button dusk="savebtn" savebutton="true"
                            class="z-10 hidden px-4 py-2 font-bold text-white transition-colors bg-pickled-bluewood rounded-xl hover:bg-gray-600">
                        <i class="mr-3 fa fa-solid fa-pencil"></i>
                        {{__('Save')}}
                    </button>
                </div>
                <div id="input-container" class="hidden">
                    <textarea name="about-us" id="about-us" cols="30" rows="10">{!! $section->content !!}</textarea>
                </div>
            </form>
        @endauth
        <div id="content-container" class="fr-view no-border lg:max-w-container lg:mx-auto">
            {!! $section->content !!}
            <div class="flex justify-end w-100">
                <x-c-t-a location="{{__('About us')}}" >{{__('I want to know more!')}}</x-c-t-a>
            </div>
        </div>
    </div>
@section('scripts')
    <script src="{{ asset('js/about-us.js')}}" defer>
    </script>
@endsection
@endsection

