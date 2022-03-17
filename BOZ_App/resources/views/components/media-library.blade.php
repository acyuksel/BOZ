<h4 class="m-2 font-weight-bold text-primary">Afbeeldingen</h4>
    <div class="m-2 row">
    @foreach($images as $image)
        <div class="m-1 card" style="width: 15rem;">
            <img style="height: 15vw; object-fit: cover;" src="{{ asset('images/' . $image->getFilename()) }}" alt="Card image cap">
        </div>
    @endforeach
    </div>
    <h4 class="m-2 font-weight-bold text-primary">Video's</h4>
    <div class="m-2 row">
    @foreach($videos as $video)
        <div class="m-2 card" style="width: 15rem;">
            <video style="height: 10vw;" src="{{ asset('videos/' . $video->getFilename()) }}" controls></video>
        </div>
    @endforeach
    </div>
    <h4 class="m-2 font-weight-bold text-primary">Audio Fragmenten</h4>
    <div class="m-2 row">
    @foreach($audioFragments as $audio)
        <div class="m-2 card" style="width: 20rem;">
            <audio style="height: 4vw;" src="{{ asset('audioFragments/' . $audio->getFilename()) }}" controls></audio>
        </div>
    @endforeach
</div>