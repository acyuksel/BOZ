@extends('layouts.admin.app')

@section('title')
{{__('Projects')}}
@endsection

@section('content')
    <a dusk="AddProject" href="{{route('project-create')}}" class="mx-4 btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">{{__('ProjectAdd')}}</span>
    </a>
    <div class="row">
        @foreach($projects as $project)
            <div class="col-4">
                <a dusk="{{$project->title}}" href="{{route('project-edit', ["id" =>$project->number])}}" class="text-decoration-none text-muted">
                    <div class="m-4 shadow card">
                        <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{$project->title}}</h6>
                        </div>
                        <div class="card-body">
                            {!! substr($project->content,0,500) !!}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <x-context-hulp message="{{__('IndexProjectHulp')}}" />
@endsection
