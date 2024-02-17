<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\category;

class menu extends Component
{
    /**
     * Create a new component instance.
     */
    // public $categories;
    public function __construct(public $categories = [])
    {
        //

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.menu',['categories' => $this->categories]);
    }
}
