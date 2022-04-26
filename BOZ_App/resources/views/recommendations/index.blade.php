@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/recommendations-header.jpg" title="{{__('Committee of recommendations')}}" wide="true" small="true">
    </x-page-header>

    <div class="lg:w-container mx-auto px-6 mt-10">
        <h2 class="text-4xl text-white font-medium">{{__('These people support our goal')}}</h2>
        <div class="md:grid md:grid-cols-3 md:gap-5 pt-10">
            @foreach($recommendations as $recommendation)
            <a href="{{$recommendation->webLink}}" style="width:12em;">
                <div class="flex flex-col rounded-lg overflow-hidden border-solid border drop-shadow-lg bg-white m-4">
                    <div class="flex justify-center items-center" style="height: 10em;">
                        <div class="img-responsive">
                            <div class="absolute top-0 w-full h-full"></div>
                            <img src="{{ url('storage/images') . '/' . $recommendation->medium->name . '.' . $recommendation->medium->extension}}" alt="header" class="object-cover w-full h-full">
                        </div>

                    </div>
                    <div class="px-2 z-10 pointer-events-none text-center bg-white">
                        <h2 class="text-2xl font-medium">{{$recommendation->name}}</h2>
                        <p class="mt-2  text-center" >{{$recommendation->description}}</p>
                    </div>
                </div>
            </a>


         @endforeach
        </div>
    </div>
@endsection
