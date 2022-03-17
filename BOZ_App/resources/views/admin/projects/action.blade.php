@extends('layouts.admin.app')

@section('title')
<a class="mr-3 text-decoration-none text-reset" href="{{ route('project')}}"><i class="fas fa-angle-left"></i> Projecten</a>
@endsection

@section('content')
<div class="m-4 shadow card">
        <div
            class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Nieuw project</h6>
        </div>
        <div class="card-body">
            <form action="{{route('project-create')}}" method="POST">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Titel</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="content">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="secondTitle" class="col-sm-2 col-form-label">Title 2</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="secondTitle">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="seondContent" class="col-sm-2 col-form-label">Content 2</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="secondContent">
                    </div>
                </div>
                @csrf
                <input class="btn btn-primary" value="Project toevoegen" type="submit">
            </form>
        </div>
    </div>
@endsection
