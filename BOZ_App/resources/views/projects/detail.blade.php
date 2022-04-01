@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/Djorg-camera-scaled.jpeg" title="{{$title}}">
    </x-page-header>

    <div class="lg:w-container mx-auto mt-10 px-6">
        <p class="text-justify lg:text-left">{{$content}}</p>

        <section class="mt-10">
            @if(isset($secondTitle))
            <h2 class="font-bold text-4xl text-pickled-bluewood">{{$secondTitle}}</h2>
            @endif
            @if(isset($secondContent))
            <p class="mt-2 lg:text-left">{{$secondContent}}</p>
            @endif
        </section>
    </div>
@endsection