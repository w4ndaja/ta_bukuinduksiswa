<?php

namespace App\Http\Controllers;

use App\Models\Student;

class GuardianController extends Controller
{
    public function getForm()
    {
        return request()->only(
            'name',
            'birth_place',
            'birth_date',
            'religion',
            'citizenship',
        );
    }

    public function validateForm()
    {
        request()->validate([
            'name' => 'required|string',
            'birth_place' => 'sometimes|string',
            'birth_date' => 'sometimes|date',
            'religion' => 'required|string',
            'citizenship' => 'required|string',
        ]);
    }

    public function update(Student $student)
    {
        request()->session()->flash('parent');
        request()->session()->flash('guardian');
        $this->validateForm();
        $student->guardian()->updateOrCreate(['student_id' => $student->id], $this->getForm());
        return back()->with('success', 'Data Wali Berhasil diperbaharui');
    }
}
