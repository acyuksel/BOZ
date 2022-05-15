@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/Djorg-camera-scaled.jpeg" title="{{$project->title}}" wide="true" small="true">
    </x-page-header>

    <div class="lg:mx-40 py-6 relative block bg-white rounded-xl md:-mt-16 drop-shadow-xl">
        <div class="lg:max-w-container mx-auto mt-10 px-6">
            <p class="text-justify lg:text-left">{!! $project->content !!}</p>

            <section class="mt-10">
                @if(isset($project->secondTitle))
                    <h2 class="font-bold text-4xl text-center text-black mb-10">{{$project->secondTitle}}</h2>
                @endif
                @if(isset($project->secondContent))
                    <p class="mt-2 lg:text-left">{!! $project->secondContent !!}</p>
                @endif
            </section>

            <h2 class="text-center text-4xl font-bold mb-4 mt-10">{{__('Media')}}</h2>
            <hr class="mb-4 border-2">
            <div class="md:columns-3 gap-4">
                @foreach($project->media as $medium)
                    <x-project-media extension="{{$medium->extension}}" fullName="{{$medium->GetNameWithExstension()}}"></x-project-media>
                @endforeach
            </div>

        </div>
    </div>
@endsection
