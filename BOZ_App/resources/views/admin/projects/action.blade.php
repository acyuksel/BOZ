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
                @csrf               
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Titel</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="{{(isset($project) ? $project->title : old('title', ""))}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="content" value="{{(isset($project) ? $project->content :  old('content', ""))}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="secondTitle" class="col-sm-2 col-form-label">Titel 2</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="secondTitle" value="{{(isset($project) ? $project->secondTitle :  old('secondTitle', ""))}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="seondContent" class="col-sm-2 col-form-label">Content 2</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="secondContent" value="{{(isset($project) ? $project->secondContent :  old('secondContent', ""))}}">
                    </div>
                </div>
                <div id="selectedMediaForm" class="form-group">
                    <label class="row-form-label">Geselecteerde media:</label>
                    <div id="selectedMediaList" class="gap-3 d-flex">
                        @if(isset($project) && $project->media)
                            @foreach($project->media as $medium)
                                @if($medium->extension == "mp3")
                                    <audio class="rounded" style="height: 3vw;" src="{{ asset('audioFragments/' . $medium->GetNameWithExstension()) }}" controls></audio>
                                @elseif($medium->extension == "mp4")
                                    <video class="rounded"  style="height: 10vw;" src="{{ asset('videos/' . $medium->GetNameWithExstension()) }}" controls></video>
                                @else
                                    <img class="rounded" style="height: 10vw; object-fit: cover;" src="{{ asset('images/' . $medium->GetNameWithExstension()) }}" alt="Card image cap">
                                @endif
                                <input name="media[]" value="{{$medium->id}}" hidden>
                            @endforeach
                        @endif
                    </div>
                </div>
                <a id="media-library-open" class="btn btn-primary">Media Bibliotheek</a>
                <input class="btn btn-primary" value="{{(isset($project) ? "Project aanpassen" :  "Project toevoegen")}}" type="submit">
            </form>
        </div>
    </div>
@endsection
