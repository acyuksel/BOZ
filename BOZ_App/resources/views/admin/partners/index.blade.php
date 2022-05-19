@extends('layouts.admin.app')

@section('title')
{{__('Partners')}}
@endsection

@section('content')
    <a dusk="AddPartner" href="{{route('partner-create')}}" class="mx-4 btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">{{__('PartnerAdd')}}</span>
    </a>
    <div class="row">
        @foreach($partners as $partner)
            <div class="col-4">
                <a dusk="{{ $partner->name }}" href="{{route('partner-edit', ["id" =>$partner->id])}}" class="text-decoration-none text-muted">
                    <div class="m-4 shadow card">
                        <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{$partner->name}}</h6>
                        </div>
                        <div class="card-body">
                            {{ substr($partner->description,0,200) }}...
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <x-context-hulp message="{{__('IndexPartnerHulp')}}" />
@endsection
