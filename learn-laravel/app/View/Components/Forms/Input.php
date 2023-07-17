<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $value;
    public $placeholder;
    public $fontclass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$value,$type,$placeholder,$fontclass)
    {
        $this->value=$value;
        $this->name=$name;
        $this->type=$type;
        $this->placeholder=$placeholder;
        $this->fontclass=$fontclass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
