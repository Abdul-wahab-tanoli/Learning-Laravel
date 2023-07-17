<?php

namespace App\View\Components;

use Illuminate\View\Component;

class servicesdiv extends Component
{
        public $name;
        public $description;
        public $svg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$description,$svg)
{
    $this->name=$name;
    $this->description=$description;
    $this->svg=$svg;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.servicesdiv');
    }
}
