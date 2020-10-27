<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function validateForm()
    {
        request()->validate([
            'code' => 'required',
            'name' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'nuptk' => 'required',
            'nip' => 'required',
            'position' => 'required',
            'level' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'education' => 'required',
            'status' => 'required',
            'work_start_date' => 'required',
        ]);
    }

    public function getForm()
    {
        return request()->only(
            'code',
            'name',
            'birth_place',
            'birth_date',
            'nuptk',
            'nip',
            'position',
            'level',
            'gender',
            'religion',
            'address',
            'phone',
            'education',
            'status',
            'work_start_date',
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::paginate(request('perpage') ?? 10);
        return view('pages.teacher.table', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = new Teacher;
        return view('pages.teacher.create', compact('teacher'));
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
        $teacher = Teacher::create($this->getForm());
        return redirect(route('teachers.create'))->with('success', 'Guru berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('pages.teacher.detail', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('pages.teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $this->validateForm();
        $teacher->update($this->getForm());
        return back()->with('success', 'Guru berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $success = redirect('teachers.index')->with('success', 'Guru dengan nip:' . $teacher->nip . ' berhasil dihapus dari database');
        $teacher->delete();
        return $success;
    }
}
