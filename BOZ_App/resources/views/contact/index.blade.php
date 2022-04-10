@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/Tijmen-Nandi-scaled.jpeg" title="{{__('Contact')}}" wide="true" small="true">
    </x-page-header>\
    <div class="lg:mx-40 py-6 relative block bg-white rounded-xl -mt-8 md:-mt-16 drop-shadow-xl">
        <div class="lg:w-container mx-auto mt-5 px-6">
            <h2 class="text-4xl font-medium">{{__('Contact Form')}}</h2>
            <p class="text-lg">{{__('Contact paragraph')}}</p>
            <form action="" class="border p-4 rounded mt-5">
                <div class="">
                    <label class="block font-medium" for="">{{__('Full name')}}</label>
                    <input type="text" class="rounded mt-1 w-full" id="full_name" placeholder="{{__('Full name example')}}" required>
                </div>
                <div class="mt-3">
                    <label class="block font-medium" for="">{{__('Email')}}</label>
                    <input type="email" class="rounded mt-1 w-full" id="full_name" placeholder="{{__('Email example')}}" required>
                </div>
                <div class="mt-3">
                    <label for="" class="block font-medium">{{__('Message')}}</label>
                    <textarea type="text" class="w-full rounded resize-none h-60"  id="full_name" placeholder="{{__('Message example')}}" required></textarea>
                </div>
                <button type="submit" class="mt-3 drop-shadow-lg bg-paradiso-light text-white text-xl font-bold w-full md:w-48 py-2 rounded-lg hover:scale-105 hover:bg-paradiso-dark selected:scale-105 selected:bg-paradiso-dark transition-all">{{__('Submit')}}</button>
            </form>
        </div>
    </div>
@endsection
