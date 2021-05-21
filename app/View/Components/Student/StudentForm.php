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
    public $educations;
    public $father;
    public $mother;
    public $guardian;
    public function __construct($action = null, $method = "post", $student = null)
    {
        $this->action = $action ?? route("students.store");
        $this->method = $method;
        $this->student = $student ?? new Student;
        $this->father = $this->student->father()->firstOrNew();
        $this->mother = $this->student->mother()->firstOrNew();
        $this->guardian = $this->student->guardian()->firstOrNew();
        $this->educations = [
            ['value' => 'Tidak Sekolah', 'label' => 'Tidak Sekolah'],
            ['value' => 'SD', 'label' => 'SD'],
            ['value' => 'SMP', 'label' => 'SMP'],
            ['value' => 'SMA', 'label' => 'SMA'],
            ['value' => 'D3', 'label' => 'D3'],
            ['value' => 'S1', 'label' => 'S1'],
            ['value' => 'S2', 'label' => 'S2'],
            ['value' => 'S3', 'label' => 'S3'],
        ];
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
