@extends('layouts.app')
@section('content')
    <x-frontend-media-library />
    <x-page-header src="img/headers/Djorg-camera-scaled.jpeg" title="{{__('About us')}}" wide="true" small="true">
    </x-page-header>
    <div class="lg:mx-40 py-6 relative block bg-white rounded-xl -mt-8 md:-mt-16 min-h-128 drop-shadow-xl px-8">
        @auth()
            <form action="{{route('update-about-us')}}" method="post">
                @csrf
                <div class="flex justify-end mb-4">
                    <button editbutton="true"
                            class="z-10 px-4 py-2 font-bold text-white transition-colors bg-pickled-bluewood rounded-xl hover:bg-gray-600">
                        <i class="mr-3 fa fa-solid fa-pencil"></i>
                        {{__('Edit')}}
                    </button>
                    <button savebutton="true"
                            class="hidden z-10 px-4 py-2 font-bold text-white transition-colors bg-pickled-bluewood rounded-xl hover:bg-gray-600">
                        <i class="mr-3 fa fa-solid fa-pencil"></i>
                        {{__('Save')}}
                    </button>
                </div>
                <div id="input-container" class="hidden">
                    <textarea name="about-us" id="about-us" cols="30" rows="10">{!! $section->content !!}</textarea>
                </div>
            </form>
        @endauth
        <div id="content-container" class="fr-view">
            {!! $section->content !!}
        </div>
    </div>
@section('scripts')
    <script src="{{ asset('js/about-us.js')}}" defer>
    </script>
@endsection
@endsection

