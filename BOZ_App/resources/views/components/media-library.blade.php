<div id="media-library-background" class="top-0 media-library-close d-none position-absolute w-100 h-100 start-0" style="z-index:50; background-color:rgb(52, 120, 134,0.9)">
    
</div>
<div id="media-library" class="bg-white rounded shadow d-none top-50 position-absolute translate-middle start-50 h-75 w-75" style="z-index:51;">
    <div id="media-library-screen" class="d-flex h-100">
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
            <li role="button" id="mediaAddBtn"  class="nav-item active ">  
                <input id="fileInputLibrary" class="nav-link" type="file" hidden multiple/>
                <span class="text-center nav-link">Media toevoegen aan bibliotheek</span>
            </li>
        </ul>
        <div class="d-flex flex-column w-100">
            <div class="d-flex justify-content-between mx-4 mt-4">
                <h4 id="media-library-title"class=" font-weight-bold text-primary">Afbeeldingen</h4>
                <h3><i class=" media-library-close text-primary fas fa-times" role='button'></i></h3>
            </div>
            <div class="overflow-auto">
                <div class="p-2 d-flex flex-wrap m-2" id="library-image">
                    @foreach($images as $image)
                        <div fld="{{$image->id}};{{$image->name}};{{$image->extension}}"  class="m-2 card boz-media" style="cursor:pointer; width: 15rem;">
                            <img class="py-3 rounded" style="height: 10vw; object-fit: cover;" src="{{ asset('storage/images/' . $image->GetNameWithExstension()) }}" alt="Card image cap">
                        </div>
                    @endforeach
                </div>
                <div id="library-video" class="p-2 d-none flex-wrap m-2 row">
                    @foreach($videos as $video)
                        <div fld="{{$video->id}};{{$video->name}};{{$video->extension}}" class="m-2 card boz-media" style="cursor:pointer; width: 15rem;">
                            <video  style="height: 10vw;" src="{{ asset('storage/videos/' . $video->GetNameWithExstension()) }}" controls></video>
                        </div>
                    @endforeach
                </div>
                <div id="library-audio" class="p-2 d-none flex-wrap m-2 row">
                    @foreach($audioFragments as $audio)
                        <div fld="{{$audio->id}};{{$audio->name}};{{$audio->extension}}" class="m-2 card boz-media" style="cursor:pointer; width: 20rem;">
                            <audio style="height: 3vw;" src="{{ asset('storage/audioFragments/' . $audio->GetNameWithExstension()) }}" controls></audio>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-between mx-4 my-4">
                <a id="media-library-add-to-project" class="btn  btn-primary">Toevoegen</a>
                <a id="media-library-delete" class="btn btn-danger">Verwijderen</a>
            </div>
        </div>
    </div>
</div>