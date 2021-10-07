<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sliderItem extends Component
{
    public $item;
    public $ide;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($item, $ide)
    {
        $this->item = $item;
        $this->ide = $ide;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slider-item');
    }
}
