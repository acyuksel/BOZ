<?php

namespace App\View\Components;

use Illuminate\View\Component;

class social_media_button extends Component
{
    
    private string $Link;
    private string $Platform;
    public function __construct(string $platform, string $link)
    {
        
        $this->$Platform = strtolower($platform);
        $this->$Link = $link;
    }

    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.social_media_button');
    }
}
