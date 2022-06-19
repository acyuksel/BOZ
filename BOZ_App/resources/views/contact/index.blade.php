@extends('layouts.app')
@section('content')
    <x-page-header src="img/headers/Tijmen-Nandi-scaled.jpeg" title="{{__('Contact')}}" wide="true" small="true">
    </x-page-header>
    <div class="relative block px-8 py-6 -mt-8 bg-white lg:mx-40 rounded-xl md:-mt-16 min-h-128 drop-shadow-xl">
        <div class="px-6 mx-auto mt-5 lg:max-w-container">
            <h2 class="text-4xl font-medium">{{__('Contact Form')}}</h2>
            <p class="text-lg">{{__('Contact paragraph')}}</p>
            <form action="{{route('contact.visitor.store&send')}}" method="post" class="p-4 mt-5 border rounded">
                @csrf
                @if(isset($success))
                <div class="px-4 py-4 mb-3 font-bold bg-green-400 rounded-xl drop-shadow-lg">
                    <p>{{$success}}</p>
                </div>
                @endif
                @if(isset($location))
                    <div class="">
                        <label class="block font-medium" for="fullname">{{__('I am from')}}</label>
                        <input type="text" class="w-full mt-1 rounded" id="location" name="location" readonly required value="{{$location}}">
                    </div>
                @endif
                <div class="mt-3">
                    <label class="block font-medium" for="fullname">{{__('Full name')}}</label>
                    <input type="text" class="w-full mt-1 rounded" id="fullname" name="fullname" placeholder="{{__('Full name example')}}" required>
                </div>
                <div class="mt-3">
                    <label class="block font-medium" for="email">{{__('Email')}}</label>
                    <input type="email" class="w-full mt-1 rounded" id="email" name="email" placeholder="{{__('Email example')}}" required>
                </div>
                <div class="mt-3">
                    <label for="message" class="block font-medium">{{__('Message')}}</label>
                    <textarea type="text" class="w-full whitespace-pre-wrap rounded resize-none h-60"  id="message" name="message" placeholder="{{__('Message example')}}" required></textarea>
                </div>
                <button dusk="submit" type="submit" class="w-full py-2 mt-3 text-xl font-bold text-white transition-all rounded-lg drop-shadow-lg bg-paradiso-light md:w-48 hover:scale-105 hover:bg-paradiso-dark selected:scale-105 selected:bg-paradiso-dark">{{__('Submit')}}</button>
            </form>
        </div>
        <div class="flex flex-row justify-center w-full">
            <x-social_media_button link="https://facebook.com" Platform="facebook" Page="Contact" Size="small" />
            <x-social_media_button link="https://instagram.com" Platform="instagram" Page="Contact" Size="small"/>
            <x-social_media_button link="https://linkedin.com" Platform="linkedin" Page="Contact" Size="small" />
        </div>
    </div>
@endsection
