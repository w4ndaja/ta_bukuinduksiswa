<?php

namespace App\View\Components\Grade;

use App\Models\Grade;
use App\Models\Teacher;
use Illuminate\View\Component;

class GradeForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $action;
    public $method;
    public $grade;
    public $teachers;
    public function __construct($action = null, $method = "post", $grade = null)
    {
        $this->action = $action ?? route("grades.store");
        $this->method = $method;
        $this->grade = $grade ?? new Grade;
        $this->teachers = Teacher::all()->map(function($q){
            return [
                'label' => $q->name,
                'value' => $q->id,
            ];
        });
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.grade.grade-form');
    }
}
