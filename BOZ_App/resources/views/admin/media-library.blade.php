@extends('layouts.admin.app')

@section('title', 'Media')

@section('content')

<h2>Afbeeldingen</h2>
@foreach((File::allFiles(public_path('images'))) as $image)

<div class="card" style="width: 15rem; display:inline-block;">
    <img style="height:10vw;" class="card-img-top" src="{{ asset('images/' . $image->getFilename()) }}" alt="Card image cap">
    <div class="card-body">
    </div>
  </div>
  @endforeach

  <h2>Video's</h2>
  @foreach((File::allFiles(public_path('videos'))) as $video)
  <div class="card" style="width: 15rem; display:inline-block;">
    <video style="height:10vw;" src="{{ asset('videos/' . $video->getFilename()) }}" controls></video>
    <div class="card-body">
    </div>
  </div>
  @endforeach

  <h2>Audio Fragmenten</h2>
  @foreach((File::allFiles(public_path('audioFragments'))) as $audio)
  <div class="card" style="width: 15rem; display:inline-block;">
    <video style="height:10vw;" src="{{ asset('audioFragments/' . $audio->getFilename()) }}" controls></video>
    <div class="card-body">
    </div>
  </div>
  @endforeach



@endsection
