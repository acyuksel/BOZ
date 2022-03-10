@extends('layouts.admin.app')

@section('title', 'Project toevoegen')

@section('content')
<div class="m-4 shadow card">
        <div
            class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Nieuw project</h6>
        </div>
        <div class="card-body">
            <form action="{{route('project-create')}}" method="POST">
                @csrf
                <input class="btn btn-primary" value="Project toevoegen" type="submit">
            </form>
        </div>
    </div>
@endsection
