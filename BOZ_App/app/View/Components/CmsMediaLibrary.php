<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\File;
use App\Models\Medium;

class MediaLibrary extends Component
{
    public $multi;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($multi)
    {
        $this->multi = $multi;
    }  

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cms-media-library');
    }
}
