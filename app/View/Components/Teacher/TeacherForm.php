<?php

namespace App\View\Components\Teacher;

use App\Models\Teacher;
use Illuminate\View\Component;

class TeacherForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $action;
    public $method;
    public $teacher;
    public $religions;
    public $educations;
    public function __construct($action = null, $method = "post", $teacher = null)
    {
        $this->action = $action ?? route("teachers.store");
        $this->method = $method;
        $this->teacher = $teacher ?? new Teacher;
        $this->religions = [
            [ 'label' => 'Islam', 'value' => 'islam', ],
            [ 'label' => 'Protestan', 'value' => 'protestan', ],
            [ 'label' => 'Katolik', 'value' => 'katolik', ],
            [ 'label' => 'Hindu', 'value' => 'hindu', ],
            [ 'label' => 'Buddha', 'value' => 'buddha', ],
            [ 'label' => 'Konghucu', 'value' => 'konghucu', ],
        ];
        $this->educations = [
            [ 'label' => 'SD', 'value' => 'sd', ],
            [ 'label' => 'SMP', 'value' => 'smp', ],
            [ 'label' => 'SMA', 'value' => 'sma', ],
            [ 'label' => 'D3', 'value' => 'd3', ],
            [ 'label' => 'S1', 'value' => 's1', ],
            [ 'label' => 'S2', 'value' => 's2', ],
            [ 'label' => 'S3', 'value' => 's3', ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.teacher.teacher-form');
    }
}
