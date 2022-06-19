@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/Djorg-camera-scaled.jpeg" title="{{$project->title}}" wide="true" small="true">
    </x-page-header>

    <div class="relative block py-6 bg-white lg:mx-40 rounded-xl md:-mt-16 drop-shadow-xl">
        <div class="px-6 mx-auto mt-10 lg:max-w-container">
            <p class="text-justify lg:text-left">{!! $project->content !!}</p>

            <section class="mt-10">
                @if(isset($project->secondTitle))
                    <h2 class="mb-10 text-4xl font-bold text-center text-black">{{$project->secondTitle}}</h2>
                @endif
                @if(isset($project->secondContent))
                    <p class="mt-2 lg:text-left">{!! $project->secondContent !!}</p>
                @endif
            </section>
            <div class="flex justify-end w-100">
                <x-c-t-a location="{{$project->title}}" >{{__('I want to know more!')}}</x-c-t-a>
            </div>
            <h2 class="mt-10 mb-4 text-4xl font-bold text-center">{{__('Media')}}</h2>
            <hr class="mb-4 border-2">
            <div class="gap-4 md:columns-3">
                @foreach($project->media as $medium)
                    <x-project-media extension="{{$medium->extension}}" fullName="{{$medium->GetNameWithExstension()}}"></x-project-media>
                @endforeach
            </div>

        </div>
    </div>
@endsection
