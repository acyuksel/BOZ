<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\File;

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
        $images = File::allFiles(public_path('images'));
        $videos = File::allFiles(public_path('videos'));
        $audioFragments = File::allFiles(public_path('audioFragments'));
        return view('components.media-library', compact(['images', 'videos', 'audioFragments']));
    }
}
