{{-- <a dusk="OpenMediaLibrary" id="media-library-open" class="btn btn-primary">{{__('Media Library')}}</a> --}}
<div id="media-library-background" class="fixed top-0 left-0 hidden w-full h-full media-library-close" style="z-index:500; background-color:rgb(40, 40, 40,0.9)">
    
</div>
<div id="media-library" class="fixed inset-0 hidden w-3/4 m-auto bg-white rounded-md shadow-lg h-3/4" style="z-index:501;">
    <div id="media-library-screen" class="flex h-full text-white rounded-l-md">
        <ul class="w-1/5 h-full no-underline list-none rounded-l-md bg-paradiso-dark">
            <div class="my-4 text-xl font-bold text-center">{{__('Media Library')}}</div>
            <hr>
            <li id="imageNav" class="mt-4 ml-4 cursor-pointer">
                <span  ><i class="mr-2 fas fa-image"></i>{{__('Images')}}</span>
            </li>
            <li dusk="NavVideo" id="videoNav" class="mt-4 ml-4 cursor-pointer">  
                <span  ><i class="mr-2 fas fa-video"></i>{{__('Video\'s')}}</span>
            </li>
            <li dusk="NavAudio" id="audioNav" class="my-4 ml-4 cursor-pointer">  
                <span ><i class="mr-2 fas fa-volume-up"></i>{{__('Audio')}}</span>
            </li>
            <hr>
            <li id="mediaAddBtn"  class="mt-4 text-center">  
                <input dusk="FileInput" id="fileInputLibrary" type="file" hidden multiple/>
                <span class="mx-4 text-lg font-bold cursor-pointer">{{__('Add To Library')}}</span>
            </li>
        </ul>
        <div class="flex flex-col w-full">
            <div class="flex justify-between mx-4 mt-4">
                <h4 id="media-library-title-image" class="text-2xl font-bold text-paradiso-dark">{{__('Images')}}</h4>
                <h4 id="media-library-title-video" class="hidden text-2xl font-bold text-paradiso-dark">{{__('Video\'s')}}</h4>
                <h4 id="media-library-title-audio" class="hidden text-2xl font-bold text-paradiso-dark">{{__('Audio')}}</h4>
                <div id="message" role="alert"></div>
                <div class="hidden px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded"></div>
                <div class="hidden px-4 py-3 text-teal-900 bg-teal-100 border border-teal-500 rounded"></div>
                <h3><i class="cursor-pointer media-library-close text-paradiso-dark fas fa-times"></i></h3>
            </div>
            <div class="overflow-auto">
                <div id="library-image" class="flex flex-wrap p-2 m-2">    
                </div>
                <div id="library-video" class="flex-wrap hidden p-2 m-2"> 
                </div>
                <div id="library-audio" class="flex-wrap hidden p-2 m-2">
                </div>
            </div>
            <div id="library-links" class="flex justify-between mx-4 text-paradiso-dark">
                
            </div>
            <div class="flex justify-between mx-4 my-4">
                <a dusk="AddSelected" id="media-library-add-to-project" class="p-2 rounded-md bg-paradiso-dark">{{__('Add')}}</a>
                <a dusk="DeleteSelected" id="media-library-delete" class="p-2 bg-red-800 rounded-md">{{__('Remove')}}</a>
            </div>
        </div>
    </div>
</div>