<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cart extends Component
{
    /**
     * Create a new component instance.
     */
    public $totalAmt;
    public function __construct(public $products)
    {


        //
        // [
        //     ['image'=>"images/Pizza/margherita-pizza.jpeg",'name' => 'Product 1', 'price' => 100,'quantity'=>1],
        //     ['image'=>"images/Pizza/margherita-pizza.jpeg",'name' => 'Product 1', 'price' => 100,'quantity'=>1],
        //     ['image'=>"images/Pizza/margherita-pizza.jpeg",'name' => 'Product 1', 'price' => 100,'quantity'=>1]
        // ];

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.cart');

    }

}
