<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $text;
    public $classes;
    
    /**
     * Create a new component instance.
     */
    public function __construct($type, $text, $classes = "")
    {
        $this->type = $type;
        $this->text = $text;
        $this->classes = $classes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
