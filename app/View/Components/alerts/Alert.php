<?php

namespace App\View\Components\alerts;

use Illuminate\View\Component;

class Alert extends Component
{    /**
     * The alert type.
     *
     * @var string
     */
    public $type;

    /**
     * The alert message.
     *
     * @var string
     */
    public $message;
    public $color;
    public $title;
    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($type="success")
    {
        $this->type = $type;// info, success, error, alert
        if ($type=="info") {
            $this->color="azul";
        } elseif ($type=="success") {
            $this->color="verde";
        } elseif ($type=="error") {
            $this->color="rojo";
        } else {
            $this->color="amarillo";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alerts.alert');
    }
}
