<div id="media-library-background" class="top-0 opacity-75 media-library-close d-none bg-primary position-absolute w-100 h-100 start-0" style="z-index:50;">
    
</div>
<div id="media-library" class="bg-white rounded shadow d-none top-50 position-absolute translate-middle start-50 h-75 w-75" style="z-index:51;">
    <div id="media-library-screen" class="justify-content-between d-flex h-100">
    <ul class="navbar-nav bg-primary sidebar sidebar-dark h-100">
        <div class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="mx-3 sidebar-brand-text">Media Bibliotheek</div>
        </div>
        <hr class="my-0 sidebar-divider">
        <li role='button' id="imageNav" class="nav-item active">
            <span class="nav-link" ><i class="fas fa-image"></i>Afbeeldingen</span>
        </li>
        <li role='button' id="videoNav" class="nav-item active">  
            <span class="nav-link" ><i class="fas fa-video"></i>Video's</span>
        </li>
        <li role='button' id="audioNav" class="nav-item active">  
            <span class="nav-link" ><i class="fas fa-volume-up"></i>Audiofragmenten</span>
        </li>
        <hr class="my-0 sidebar-divider">
    </ul>
        <div class="p-3" id="library-image">
            <h4 class="m-2 font-weight-bold text-primary">Afbeeldingen</h4>
            <div class="m-2 row">
                @foreach($images as $image)
                    <div class="m-2 card" style="width: 15rem;">
                        <img style="height: 15vw; object-fit: cover;" src="{{ asset('images/' . $image->getFilename()) }}" alt="Card image cap">
                    </div>
                @endforeach
            </div>
        </div>
        <div id="library-video" class="p-3 d-none">
            <h4 class="m-2 font-weight-bold text-primary">Video's</h4>
            <div class="m-2 row">
                @foreach($videos as $video)
                    <div class="m-2 card" style="width: 15rem;">
                        <video style="height: 10vw;" src="{{ asset('videos/' . $video->getFilename()) }}" controls></video>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="library-audio" class="p-3 d-none">
            <h4 class="m-2 font-weight-bold text-primary">Audio Fragmenten</h4>
            <div class="m-2 row">
                @foreach($audioFragments as $audio)
                    <div class="m-2 card" style="width: 20rem;">
                        <audio style="height: 4vw;" src="{{ asset('audioFragments/' . $audio->getFilename()) }}" controls></audio>
                    </div>
                @endforeach
            </div>
        </div>
        <h3><i class="m-4 media-library-close text-primary fas fa-times" role='button'></i></h3>
    </div>
</div>