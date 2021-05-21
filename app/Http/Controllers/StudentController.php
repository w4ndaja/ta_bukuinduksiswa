<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function validateForm()
    {
        request()->validate([
            'grade_id' => 'nullable|sometimes|integer',
            'nis' => 'nullable|sometimes|string',
            'name' => 'required|string',
            'gender' => 'nullable|sometimes|string',
            'birth_place' => 'required|string',
            'birth_date' => 'required|date',
            'religion' => 'nullable|sometimes|string',
            'citizenship' => 'nullable|sometimes|string',
            'fam_order' => 'nullable|sometimes|string',
            'fam_count' => 'nullable|sometimes|string',
            'fam_status' => 'nullable|sometimes|string',
            'language' => 'nullable|sometimes|string',
            'address' => 'nullable|sometimes|string',
            'phone' => 'nullable|sometimes|string',
            'live_with' => 'nullable|sometimes|string',
            'residence_distance' => 'nullable|sometimes|string',
            'blood_type' => 'nullable|sometimes|string',
            'height' => 'nullable|sometimes|string',
            'weight' => 'nullable|sometimes|string',
            'graduate_from' => 'nullable|sometimes|string',
            'ijazah_year' => 'nullable|sometimes|string',
            'ijazah_sd_no' => 'nullable|sometimes|string',
            'skhu_no' => 'nullable|sometimes|string',
            'receive_at_grade_id' => 'nullable|sometimes|integer',
            'date_received' => 'nullable|sometimes|date',
            'hobby' => 'nullable|sometimes|string',
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
        $students = Student::doesntHave('dropOut')->with('grade', 'receiveAtGrade', 'father', 'mother', 'guardian');
        if(request('query')){
            $students = $students->where('name', 'like', '%'.request('query').'%');
        }
        $students = $students->paginate(request('perpage') ?? 10)->withQueryString();
        return view('pages.student.table', compact('students'));
    }
    public function moved()
    {
        $students = Student::has('dropOut')->with('grade', 'receiveAtGrade', 'father', 'mother', 'guardian');
        if(request('query')){
            $students = $students->where('name', 'like', '%'.request('query').'%');
        }
        $students = $students->paginate(request('perpage') ?? 10)->withQueryString();
        return view('pages.student.moved', compact('students'));
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
        request()->session()->flash('parent');
        request()->session()->flash('father');
        return redirect(route('students.edit', $student->id))->with('success', 'Murid berhasil ditambah, lanjutkan mengisi form orang tua');
        // return back()->with('success', 'Murid berhasil ditambah');
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

    public function print(Student $student)
    {
        return view('pages.student.print', compact('student'));
    }

    public function lessonResultPrint(Student $student)
    {
        return view('pages.student.lesson-result-print', compact('student'));
    }

    public function confirmDelete(Student $student)
    {
        $action = route('students.destroy', $student->id);
        $message = "Apakah anda yakin ingin menghapus data siswa dengan nis = ".$student->nis.", nama = ".$student->name;
        return view('partials.confirm-delete', compact('action', 'message'));
    }

    public function confirmDropOut(Student $student)
    {
        if($student->dropOut) return back();
        return view('partials.confirm-drop-out', compact('student'));
    }

    public function confirmDropIn(Student $student)
    {
        if(!$student->dropOut) return back();
        return view('partials.confirm-drop-in', compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $success = redirect(route('students.index'))->with('success', 'Murid dengan nis:'.$student->nis.' berhasil dihapus dari database');
        $student->delete();
        return $success;
    }

    public function dropOut(Student $student)
    {
        request()->validate([
            'out_reason' => 'required|string',
        ]);
        $student->dropOut()->create(['out_reason' => request()->out_reason]);
        return redirect(route('students.moved'))->with('success', 'Murid dengan nis:'.$student->nis.' berhasil dikeluarkan');
    }
    public function dropIn(Student $student)
    {
        $student->dropOut()->delete();
        return redirect(route('students.edit', $student->id))->with('success', 'Murid dengan nis:'.$student->nis.' berhasil dimasukkan kembali');
    }
}
