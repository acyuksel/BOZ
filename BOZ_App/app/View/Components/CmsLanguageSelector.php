<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Language;

class CmsLanguageSelector extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $languages = Language::all();
        return view('components.cms-language-selector', compact("languages"));
    }
}
