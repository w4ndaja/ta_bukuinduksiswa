<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function validateForm()
    {
        request()->validate([
            'grade_id' => 'required',
            'nis' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'religion' => 'required',
            'citizenship' => 'required',
            'fam_order' => 'required',
            'fam_count' => 'required',
            'fam_status' => 'required',
            'language' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'live_with' => 'required',
            'residence_distance' => 'required',
            'blood_type' => 'required',
            'sick_history' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'graduate_from' => 'required',
            'ijazah_year' => 'required',
            'ijazah_sd_no' => 'required',
            'skhu_no' => 'required',
            'move_from' => 'required',
            'receive_at_grade_id' => 'required',
            'date_received' => 'required',
            'hobby' => 'required',
            'leave_reason' => 'required',
            'finished_studying_at' => 'required',
            'ijazah_now_no' => 'required',
            'skhu_now_no' => 'required',
        ]);
    }

    public function getForm()
    {
        return request()->only(
            'grade_id',
            'nis',
            'name',
            'gender',
            'birth_place',
            'birth_date',
            'religion',
            'citizenship',
            'fam_order',
            'fam_count',
            'fam_status',
            'language',
            'address',
            'phone',
            'live_with',
            'residence_distance',
            'blood_type',
            'sick_history',
            'height',
            'weight',
            'graduate_from',
            'ijazah_year',
            'ijazah_sd_no',
            'skhu_no',
            'move_from',
            'receive_at_grade_id',
            'date_received',
            'hobby',
            'leave_reason',
            'finished_studying_at',
            'ijazah_now_no',
            'skhu_now_no',
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('grade', 'receiveAtGrade')->paginate(request('perpage') ?? 10);
        return view('pages.student.table', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = new Student;
        return view('pages.student.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateForm();
        $student = Student::create($this->getForm());
        return redirect(route('student.edit', $student->id))->with('success', 'Murid berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('pages.student.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('pages.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $this->validateForm();
        $student->update($this->getForm());
        return back()->with('success', 'Murid berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $success = redirect('student.index')->with('success', 'Murid dengan nis:'.$student->nis.' berhasil dihapus dari database');
        $student->delete();
        return $success;
    }
}
