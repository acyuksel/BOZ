@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/recommendations-header.jpg" title="{{__('Collaborative partners')}}" wide="true" small="true">
    </x-page-header>
    <div class="relative block py-6 -mt-8 bg-white lg:mx-40 rounded-xl md:-mt-16 drop-shadow-xl">
        <div class="px-6 mx-auto mt-10 lg:w-container">
            <h2 dusk="title" class="text-4xl font-medium text-black">{{__('These people support our goal')}}</h2>
            <div class="pt-10 md:grid md:grid-cols-3 md:gap-5">
                @foreach($Partners as $partner)
                    <div class="flex flex-col m-4 overflow-hidden bg-white border border-solid rounded-lg drop-shadow-lg">
                            <div class="flex items-center justify-center">
                                <div class="img-fluid">
                                    @if(empty($partner->medium))
                                        <img src="{{ asset('img/committee-of-recommendations-placeholder.jpg')}}" alt="header" class="object-cover w-full h-full"  style="height:15vw; object-fit:contain;">
                                    @else
                                        <img src="{{ url('storage/images') . '/' . $partner->medium->name . '.' . $partner->medium->extension}}" alt="header" style="height:15vw; object-fit:contain;">
                                    @endif
                                </div>

                            </div>
                            <div class="z-10 px-2 text-center bg-white pointer-events-none">
                                <h2 class="text-2xl font-medium">{{$partner->name}}</h2>
                                <p class="mt-2 text-center" >{{$partner->description}}</p>
                            </div>
                        </div>


                @endforeach
            </div>
        </div>
    </div>
@endsection
