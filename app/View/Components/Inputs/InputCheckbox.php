<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class InputCheckbox extends Component
{
    /**
     * Etiqueta del checkbox
     * @var string
     *
     */
    public $label;

    /**
     * Color del checkbox
     * @var string
     */
    public $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label="", $color="primary")
    {
        $this->label = $label;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.input-checkbox');
    }
}
