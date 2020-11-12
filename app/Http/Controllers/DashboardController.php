<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function index()
    {
        $counter = [
            'students' => Student::count(),
            'grades' => Grade::count(),
            'teachers' => Teacher::count(),
            'subjects' => Subject::count(),
        ];
        return view('pages.dashboard', compact('counter'));
    }
}
