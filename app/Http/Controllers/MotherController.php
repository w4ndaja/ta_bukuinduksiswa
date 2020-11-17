<?php

namespace App\Http\Controllers;

use App\Models\Student;

class MotherController extends Controller
{
    public function getForm()
    {
        return request()->only(
            'name',
            'birth_place',
            'birth_date',
            'religion',
            'citizenship',
            'education',
            'work',
            'monthly_income',
            'address',
            'phone',
            'died_at',
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
            'education' => 'required|string',
            'work' => 'required|string',
            'monthly_income' => 'required|numeric',
            'address' => 'required|string',
            'phone' => 'required|string',
            'died_at' => 'sometimes|date',
        ]);
    }

    public function update(Student $student)
    {
        request()->session()->flash('parent');
        request()->session()->flash('mother');
        $this->validateForm();
        $student->mother()->updateOrCreate(['student_id' => $student->id], $this->getForm());
        return back()->with('success', 'Data Ibu Berhasil diperbaharui');
    }
}
