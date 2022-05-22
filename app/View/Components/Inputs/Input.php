<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;
use Mockery\Undefined;

class Input extends Component
{

    /**
     * @var string
     */
    public $msg;

    /**
     * El campo no pasa la valiación
     * @var boolean
     */
    public $hasError;
    /**
     * Si pasa la validación
     * @var boolean
     */
    public $isValid;
    /**
     * exto de la etiqueta
     * @var string
     */
    public $label;
    /**
     * Name of the input
     */
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($msg=null, $hasError=false, $isValid=false, $label="",
        $name="")
    {
        $this->msg = $msg;
        $this->hasError = $hasError;
        $this->isValid = $isValid;
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.input');
    }

    public function setErrorStatus(){
        $this->hasError = true;
    }
}
