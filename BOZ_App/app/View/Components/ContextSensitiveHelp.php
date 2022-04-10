<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContextSensitiveHelp extends Component
{
    /**
     * The message.
     *
     * @var string
     */
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.context-sensitive-help');
    }
}
