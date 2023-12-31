<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Widget extends Component
{
    public $title, $subtitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this-> title = $title;
        $this-> subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widget');
    }
}
