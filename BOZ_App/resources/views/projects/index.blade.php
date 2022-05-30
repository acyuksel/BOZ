@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/Djorg-camera-scaled.jpeg" title="{{__('Our projects')}}" wide="true" small="true">
    </x-page-header>

    <div class="px-6 mx-auto mt-10 lg:w-container">
        <div class="pt-10 md:grid md:grid-cols-3 md:gap-5">
            @foreach($projects as $project)
                <x-project-card href="{{route('project-detail', ['project' => $project->number])}}" src="img/headers/project-header.jpeg" title="{{$project->title}}" content="{{$project->content}}"></x-project-card>
            @endforeach
        </div>
    </div>
@endsection
