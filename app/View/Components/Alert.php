<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $name;
    public $type;
    public $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type = "danger", $message = "Maaf sedang terjadi kesalahan, silahkan coba beberapa saat lagi")
    {
        $this->name = $name;
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
