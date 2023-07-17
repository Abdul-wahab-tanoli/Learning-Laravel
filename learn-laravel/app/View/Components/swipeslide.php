<?php

namespace App\View\Components;

use Illuminate\View\Component;

class swipeslide extends Component
{
    public $name;
    public $designation;
    public $text;
    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$designation,$text,$image)
    {
        $this->name=$name;
        $this->designation=$designation;
        $this->text=$text;
        $this->image=$image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.swipeslide');
    }
}
