<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\File;
use App\Models\Medium;

class MediaLibrary extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }  

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $images = Medium::whereIn("extension", ["png", "jpeg", "jpg"])->get();
        $videos = Medium::where("extension", "mp4")->get();
        $audioFragments = Medium::where("extension", "mp3")->get();
        return view('components.media-library', compact(['images', 'videos', 'audioFragments']));
    }
}
