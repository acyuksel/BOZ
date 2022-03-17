@extends('layouts.admin.app')

@section('title')
Projecten
@endsection

@section('content')
<a href="{{route('project-create')}}" class="mx-4 btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Project toevoegen</span>
</a>
<div class="row">
    <div class="col-lg-4">
        <a href="{{route('project-edit', 1)}}" class="text-decoration-none text-muted">
        <div class="m-4 shadow card">
            <div
                class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Project</h6>
            </div>
            <div class="card-body">
                Dropdown menus can be placed in the card header in order to extend the functionality
                of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis
                icon in the card header can be clicked on in order to toggle a dropdown menu.
            </div>
        </div>
        </a>
    </div>
    <div class="col-lg-4">
        <a href="{{route('project-edit', ["id" => 1])}}" class="text-decoration-none text-muted">
        <div class="m-4 shadow card">
            <div
                class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Project</h6>
            </div>
            <div class="card-body">
                Dropdown menus can be placed in the card header in order to extend the functionality
                of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis
                icon in the card header can be clicked on in order to toggle a dropdown menu.
            </div>
        </div>
        </a>
    </div>
    <div class="col-lg-4">
        <a href="{{route('project-edit', ["id" => 1])}}" class="text-decoration-none text-muted">
        <div class="m-4 shadow card">
            <div
                class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Project</h6>
            </div>
            <div class="card-body">
                Dropdown menus can be placed in the card header in order to extend the functionality
                of a basic card. In this dropdown card example, the Font Awesome vertical ellipsis
                icon in the card header can be clicked on in order to toggle a dropdown menu.
            </div>
        </div>
        </a>
    </div>
</div>
@endsection
