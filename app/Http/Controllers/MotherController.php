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
            'birth_place' => 'required|string',
            'birth_date' => 'required|date',
            'religion' => 'nullable|sometimes|string',
            'citizenship' => 'nullable|sometimes|string',
            'education' => 'nullable|sometimes|string',
            'work' => 'nullable|sometimes|string',
            'monthly_income' => 'nullable|sometimes|numeric',
            'address' => 'nullable|sometimes|string',
            'phone' => 'nullable|sometimes|string',
            'died_at' => 'nullable|sometimes|date',
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
