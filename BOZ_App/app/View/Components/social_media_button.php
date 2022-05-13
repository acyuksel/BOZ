<?php

namespace App\View\Components;

use Illuminate\View\Component;

class social_media_button extends Component
{

    private string $Link;
    private string $Platform;
    private string $Size;
    public function __construct(string $platform, string $link, string $size)
    {

        $this->Platform = strtolower($platform);
        $this->Link = $link;
        $this->Size = strtolower($size);
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
