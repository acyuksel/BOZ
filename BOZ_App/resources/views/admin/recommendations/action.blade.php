@extends('layouts.admin.app')

@section('title')
<a class="mr-3 text-decoration-none text-reset" href="{{ route('recommendation')}}"><i class="fas fa-angle-left"></i> {{__('Recommendations')}}</a>
@endsection

@section('content')
<x-error/>
<div class="m-4 shadow card">
        <div
            class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{(isset($recommendation) ? __('RecommendationEdit') : __('RecommendationAdd'))}}</h6>
        @if(isset($recommendation))
            <form action="{{route('recommendation-delete', ["id"=> $recommendation->number])}}" method="POST">
                @csrf
                <button dusk="Deleterecommendation" class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
        @endif
        </div>
        <div class="card-body">
            <form action="{{ (isset($recommendation) ? route('recommendation-edit', ["id" => $recommendation->number]) : route('recommendation-create'))}}" method="POST">
                @csrf               
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">{{__('NameLabel')}}</label>
                    <div class="col-sm-10">
                    <input dusk="Name" type="text" class="form-control" name="name" value="{{(isset($recommendation) ? $recommendation->name : old('name', ""))}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">{{__('DescriptionLabel')}}</label>
                    <div class="col-sm-10">
                    <textarea dusk="Description" id="description"  rows="5" class="form-control" name="description" >{{(isset($recommendation) ? $recommendation->description :  old('description', ""))}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="webLink" class="col-sm-2 col-form-label">{{__('WebLinkLabel')}}</label>
                    <div class="col-sm-10">
                    <input dusk="WebLink" type="text" class="form-control" name="webLink" value="{{(isset($recommendation) ? $recommendation->webLink : old('webLink', ""))}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="row-form-label">{{__('Image')}}:</label>
                    <div id="selectedMediaList" class="flex-wrap gap-3 d-flex">
                        @if(isset($recommendation) && $recommendation->medium)
                            <img class="rounded" style="height: 10vw; object-fit: cover;" src="{{ asset('storage/images/' . $recommendation->medium->GetNameWithExstension()) }}" alt="Card image cap">
                            <input name="media_id" value="{{$recommendation->medium->id}}" hidden>
                        @endif
                    </div>
                </div>
                <x-cms-media-library multi="0"/>
                <input dusk="Submitrecommendation" class="btn btn-primary" value="{{(isset($recommendation) ? __('RecommendationEdit') :  __('RecommendationAdd'))}}" type="submit">
            </form>
        </div>
    </div>
    <x-context-hulp message="{{__('ActionRecommendationHulp')}}" />
@endsection
