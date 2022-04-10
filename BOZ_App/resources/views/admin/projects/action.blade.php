@extends('layouts.admin.app')

@section('title')
<a class="mr-3 text-decoration-none text-reset" href="{{ route('project')}}"><i class="fas fa-angle-left"></i> Projecten</a>
@endsection

@section('content')
<x-error/>
<div class="m-4 shadow card">
        <div
            class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{(isset($project) ? "Project aanpassen" : "Nieuw project")}}</h6>
        @if(isset($project))
            <form action="{{route('project-delete', ["id"=> $project->id])}}" method="POST">
                @csrf
                <button dusk="DeleteProject" class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </form>
        @endif
        </div>
        <div class="card-body">
            <form action="{{ (isset($project) ? route('project-edit', ["id" => $project->id]) : route('project-create'))}}" method="POST">
                @csrf               
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Titel</label>
                    <div class="col-sm-10">
                    <input dusk="Title" type="text" class="form-control" name="title" value="{{(isset($project) ? $project->title : old('title', ""))}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                    <input dusk="Content" type="text" class="form-control" name="content" value="{{(isset($project) ? $project->content :  old('content', ""))}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="secondTitle" class="col-sm-2 col-form-label">Titel 2</label>
                    <div class="col-sm-10">
                    <input dusk="Title2" type="text" class="form-control" name="secondTitle" value="{{(isset($project) ? $project->secondTitle :  old('secondTitle', ""))}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="seondContent" class="col-sm-2 col-form-label">Content 2</label>
                    <div class="col-sm-10">
                    <input dusk="Content2" type="text" class="form-control" name="secondContent" value="{{(isset($project) ? $project->secondContent :  old('secondContent', ""))}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="row-form-label">Media:</label>
                    <div id="selectedMediaList" class="flex-wrap gap-3 d-flex">
                        @if(isset($project) && $project->media)
                            @foreach($project->media as $medium)
                                @if($medium->extension == "mp3")
                                    <a class="mediumContainer" href="{{ route('project-media-remove', ["projectId" => $project->id, "mediumId" => $medium->id]) }}">
                                        <audio class="rounded" style="height: 3vw;" src="{{ asset('storage/audios/' . $medium->GetNameWithExstension()) }}" controls></audio>
                                        <div class="rounded deleteMedium"><i class="fa fa-trash text-light h1" aria-hidden="true"></i></div>
                                    </a>
                                @elseif($medium->extension == "mp4")
                                    <a class="mediumContainer" href="{{ route('project-media-remove', ["projectId" => $project->id, "mediumId" => $medium->id]) }}">
                                        <video class="rounded"  style="height: 10vw;" src="{{ asset('storage/videos/' . $medium->GetNameWithExstension()) }}" controls></video>
                                        <div class="rounded deleteMedium"><i class="fa fa-trash text-light h1" aria-hidden="true"></i></div>
                                    </a>
                                @else
                                    <a class="mediumContainer" href="{{ route('project-media-remove', ["projectId" => $project->id, "mediumId" => $medium->id]) }}">
                                        <img class="rounded" style="height: 10vw; object-fit: cover;" src="{{ asset('storage/images/' . $medium->GetNameWithExstension()) }}" alt="Card image cap">
                                        <div class="rounded deleteMedium"><i class="fa fa-trash text-light h1" aria-hidden="true"></i></div>
                                    </a>
                                @endif
                                <input name="media[]" value="{{$medium->id}}" hidden>
                            @endforeach
                        @endif
                    </div>
                </div>
                <x-media-library/>
                <input dusk="SubmitProject" class="btn btn-primary" value="{{(isset($project) ? "Project aanpassen" :  "Project toevoegen")}}" type="submit">

            </form>
        </div>
    </div>
@endsection
