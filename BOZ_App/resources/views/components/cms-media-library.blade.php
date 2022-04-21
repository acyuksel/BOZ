<a dusk="OpenMediaLibrary" id="media-library-open" class="btn btn-primary">{{__('Media Library')}}</a>
<div id="media-library-background" class="top-0 media-library-close d-none position-fixed w-100 h-100 start-0" style="z-index:500; background-color:rgb(40, 40, 40,0.9)">
    
</div>
<div id="mediaLibraryMultiple" class="d-none">{{$multi}}</div>
<div id="media-library" class="bg-white rounded shadow d-none top-50 position-fixed translate-middle start-50 h-75 w-75" style="z-index:501;">
    <div id="media-library-screen" class="text-white d-flex h-100">
        <ul class="list-unstyled bg-primary h-100 text-decoration-none">
            <div class="mx-3 my-3 text-center font-weight-bold h5">{{__('Media Library')}}</div>
            <hr>
            <li role='button' id="imageNav" class="ml-3 ">
                <span  ><i class="mr-2 fas fa-image"></i>{{__('Images')}}</span>
            </li>
            <li dusk="NavVideo" role='button' id="videoNav" class="mt-4 ml-3">  
                <span  ><i class="mr-2 fas fa-video"></i>{{__('Video\'s')}}</span>
            </li>
            <li dusk="NavAudio" role='button' id="audioNav" class="mt-4 ml-3">  
                <span ><i class="mr-2 fas fa-volume-up"></i>{{__('Audio')}}</span>
            </li>
            <hr>
            <li role="button" id="mediaAddBtn"  class="mt-3 text-center nav-item active">  
                <input dusk="FileInput" id="fileInputLibrary" type="file" hidden multiple/>
                <span class="font-weight-bold">{{__('Add To Library')}}</span>
            </li>
        </ul>
        <div class="d-flex flex-column w-100">
            <div class="mx-4 mt-4 d-flex justify-content-between">
                <h4 id="media-library-title-image" class="font-weight-bold text-primary">{{__('Images')}}</h4>
                <h4 id="media-library-title-video" class="font-weight-bold text-primary d-none">{{__('Video\'s')}}</h4>
                <h4 id="media-library-title-audio" class="font-weight-bold text-primary d-none">{{__('Audio')}}</h4>
                <div id="message"></div>
                <h3><i class=" media-library-close text-primary fas fa-times" role='button'></i></h3>
            </div>
            <div class="overflow-auto">
                <div id="library-image" class="flex-wrap p-2 m-2 d-flex">    
                </div>
                <div id="library-video" class="flex-wrap p-2 m-2 d-none row"> 
                </div>
                <div id="library-audio" class="flex-wrap p-2 m-2 d-none row">
                </div>
            </div>
            <div id="library-links" class="mx-4 justify-content-between d-flex">
                
            </div>
            <div class="mx-4 my-4 d-flex justify-content-between">
                <a dusk="AddSelected" id="media-library-add-to-project" class="btn btn-primary">{{__('Add')}}</a>
                <a dusk="DeleteSelected" id="media-library-delete" class="btn btn-danger">{{__('Remove')}}</a>
            </div>
        </div>
    </div>
</div>