<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $value;
    public $old;
    public $placeholder;
    public $autofocus;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = "text", $name, $placeholder = "", $autofocus = false, $visibleOld = true, $value = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->autofocus = $autofocus;
        $this->value = $value;
        $this->old = (!is_array(old($this->name)) && $visibleOld) ? (old($this->name)) : false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
