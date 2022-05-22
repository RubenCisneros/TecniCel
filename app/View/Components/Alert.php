<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Color of the alert
     *
     * @var string
     */
    public $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color="primary")
    {

        $this->color = $color;
        if(session()->has('x-color')){
            $this->color = session('x-color');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
