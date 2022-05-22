<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class Basic extends Component
{
    /**
     * Color del boton
     * @var string
     */
    public $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color='bg-sky-500')
    {
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.basic');
    }
}
