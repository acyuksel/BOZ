@extends('layouts.admin.app')

@section('title')
    <a class="mr-3 text-decoration-none text-reset" href="{{ route('contact.index') }}"><i
            class="fas fa-angle-left"></i>{{ __('ContactMessages') }}</a>
@endsection
@section('content')
    <div class="container p-2 bg-white rounded-sm shadow">
        <div class="row">
            <div class="col-10 d-flex align-items-center">
                {{ __('Bericht van') }} {{ $contact->fullname }} ({{ $contact->email }})
            </div>
            <div class="col">
                <form action="{{ route('contact.destroy', ['contact' => $contact->id]) }}" method="post">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">{{ __('Verwijder') }} <i
                            class="fas fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
        <div class="p-2 mt-2 border rounded">
            {{ e($contact->message) }}
        </div>
    </div>
    <x-context-hulp message="{{__('DetaillContactHulp')}}" />
@endsection
