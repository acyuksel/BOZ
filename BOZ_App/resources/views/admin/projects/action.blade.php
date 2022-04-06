@extends('layouts.admin.app')

@section('title')
<a class="mr-3 text-decoration-none text-reset" href="{{ route('project')}}"><i class="fas fa-angle-left"></i> Projecten</a>
@endsection

@section('content')
<x-media-library/>
<x-error/>
<div class="m-4 shadow card">
        <div
            class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{(isset($project) ? "Project aanpassen" : "Nieuw project")}}</h6>
        @if(isset($project))
            <form action="{{route('project-delete', ["id"=> $project->id])}}" method="POST">   
                @csrf
                <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
        @endif
        </div>
        <div class="card-body">
            <form action="{{ (isset($project) ? route('project-edit', ["id" => $project->id]) : route('project-create'))}}" method="POST">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Titel</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="{{(isset($project) ? $project->title : "")}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="content" value="{{(isset($project) ? $project->content : "")}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="secondTitle" class="col-sm-2 col-form-label">Title 2</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="secondTitle" value="{{(isset($project) ? $project->secondTitle : "")}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="seondContent" class="col-sm-2 col-form-label">Content 2</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="secondContent" value="{{(isset($project) ? $project->secondContent : "")}}">
                    </div>
                </div>
                @csrf
                <input class="btn btn-primary" value="{{(isset($project) ? "Project aanpassen" :  "Project toevoegen")}}" type="submit">
            </form>
            <a id="media-library-open" class="btn btn-primary">Media Bibliotheek</a>
        </div>
    </div>
@endsection
