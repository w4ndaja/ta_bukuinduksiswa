<?php

namespace App\View\Components\LessonValue;

use App\Models\Grade;
use App\Models\LessonValue;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\View\Component;

class LessonValueForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $action;
    public $method;
    public $lessonValue;
    public $subjects;
    public $grades;
    public $students;
    public function __construct($action = null, $method = "post", $lessonValue = null)
    {
        $this->action = $action ?? route("lesson-values.store");
        $this->method = $method;
        $this->lessonValue = $lessonValue ?? new LessonValue;
        $this->students = Student::all()->map(function($q){
            return [
                'label' => $q->nis.'-'.$q->name,
                'value' => $q->nis,
            ];
        });
        $this->subjects = Subject::all()->map(function($q){
            return [
                'label' => $q->code.'-'.$q->name,
                'value' => $q->id,
            ];
        });
        $this->grades = Grade::all()->map(function($q){
            return [
                'label' => $q->code.'-'.$q->name,
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
        return view('components.lesson-value.lesson-value-form');
    }
}
