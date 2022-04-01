@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/Djorg-camera-scaled.jpeg" title="Onze projecten">
    </x-page-header>

    <div class="lg:w-container mx-auto px-6 mt-10">
        <div class="md:grid md:grid-cols-2 md:gap-24 pt-10">
            @foreach($projects as $project)
                <x-project-card href="{{route('project-detail', ['project' => $project->id])}}" src="img/headers/project-header.jpeg" title="{{$project->title}}" content="{{$project->content}}"></x-project-card>
            @endforeach
        </div>
    </div>
@endsection