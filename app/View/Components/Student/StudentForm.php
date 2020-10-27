<?php

namespace App\View\Components\Student;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\View\Component;

class StudentForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $action;
    public $method;
    public $student;
    public $grades;
    public $religions;
    public $cityzenships;
    public function __construct($action = null, $method = "post", $student = null)
    {
        $this->action = $action ?? route("students.store");
        $this->method = $method;
        $this->student = $student ?? new Student;
        $this->grades = Grade::all()->map(function ($q) {
            return [
                'label' => $q->code . ' - ' . $q->name,
                'value' => $q->id,
            ];
        });
        $this->religions = [
            [ 'label' => 'Islam', 'value' => 'islam', ],
            [ 'label' => 'Protestan', 'value' => 'protestan', ],
            [ 'label' => 'Katolik', 'value' => 'katolik', ],
            [ 'label' => 'Hindu', 'value' => 'hindu', ],
            [ 'label' => 'Buddha', 'value' => 'buddha', ],
            [ 'label' => 'Konghucu', 'value' => 'konghucu', ],
        ];
        $this->cityzenships = [
            ['label' => 'WNI', 'value' => 'wni'],
            ['label' => 'WNA', 'value' => 'wna'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.student.student-form');
    }
}
