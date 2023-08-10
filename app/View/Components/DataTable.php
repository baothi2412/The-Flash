<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTable extends Component
{
    public $columnsName;
    public $data;

    /**
     * Create a new component instance.
     */
    public function __construct($columnsName, $data)
    {
        $this->columnsName = $columnsName;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table');
    }
}
