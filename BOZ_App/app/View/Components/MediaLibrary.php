<?php

namespace App\View\Components;

use Illuminate\View\Component;
use function Sodium\add;

class MediaLibrary extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $images = Array();
        $videos = Array();
        $audioFragments = Array();

        foreach(File::allFiles(public_path('images')) as $image){
            $fileName = $image.getFileName();
            $images.add($fileName);
        }

        foreach(File::allFiles(public_path('videos')) as $video){
            $fileName = $video.getFileName();
            $images.add($fileName);
        }
        foreach(File::allFiles(public_path('audioFragments')) as $audio){
            $fileName = $audio.getFileName();
            $images.add($fileName);
        }

    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.media-library');
    }
}
