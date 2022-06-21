@extends('layouts.admin.app')

@section('title')
{{__('Recommendations')}}
@endsection

@section('content')
    <a dusk="AddProject" href="{{route('recommendation-create')}}" class="mx-4 btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">{{__('RecommendationAdd')}}</span>
    </a>
    <div class="row">
        @foreach($recommendations as $recommendation)
            <div class="col-4">
                <a dusk="{{ $recommendation->name }}" href="{{route('recommendation-edit', ["id" =>$recommendation->number])}}" class="text-decoration-none text-muted">
                    <div class="m-4 shadow card">
                        <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{$recommendation->name}}</h6>
                        </div>
                        <div class="card-body">
                            {{ substr($recommendation->description,0,200) }}...
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <x-context-hulp message="{{__('IndexRecommendationHulp')}}" />
@endsection
