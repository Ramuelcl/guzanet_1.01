<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $tags;
    public $buttons;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tags=[], $buttons=[])
    {
        $this->tags=$tags;
        $this->buttons=$buttons;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
    public function hasTags()
    {
        return count($this->tags);
    }
    public function hasButtons()
    {
        return count($this->buttons);
    }
}
