<?php

namespace App\View\Components\Subject;

use App\Models\Subject;
use Illuminate\View\Component;

class SubjectForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $action;
    public $method;
    public $subject;
    public function __construct($action = null, $method = "post", $subject = null)
    {
        $this->action = $action ?? route("subjects.store");
        $this->method = $method;
        $this->subject = $subject ?? new Subject;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.subject.subject-form');
    }
}
