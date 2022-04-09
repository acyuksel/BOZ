@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/Djorg-camera-scaled.jpeg" title="{{$title}}" wide="true" small="true">
    </x-page-header>

    <div class="lg:mx-40 py-6 relative block bg-white rounded-xl md:-mt-16 drop-shadow-xl">
        <div class="lg:w-container mx-auto mt-10 px-6">
            <p class="text-justify lg:text-left">{{$content}}</p>

            <section class="mt-10">
                @if(isset($secondTitle))
                    <h2 class="font-bold text-4xl text-black">{{$secondTitle}}</h2>
                @endif
                @if(isset($secondContent))
                    <p class="mt-2 lg:text-left">{{$secondContent}}</p>
                @endif
            </section>
        </div>
    </div>
@endsection
