<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $name;
    public $old;
    public $placeholder;
    public $autofocus;
    public $options;
    public $createDataRoute;
    public $value;
    public function __construct($type = "text", $name, $placeholder = "", $autofocus = false, $visibleOld = true, $options = [], $createDataRoute = null, $value = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->autofocus = $autofocus;
        $this->options = $options;
        $this->createDataRoute = $createDataRoute;
        $this->value = $value;
        $this->old = (!is_array(old($this->name)) && $visibleOld) ? old($this->name) : false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }
}
