<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Bread extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $currentpage;
    public function __construct($currentpage)
    {
        //
        $this->currentpage = $currentpage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bread');
    }
}
