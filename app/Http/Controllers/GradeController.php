<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{

    public function validateForm()
    {
        request()->validate([
            'code' => 'required',
            'name' => 'required',
            'parallel' => 'required',
            'form_teacher_id' => 'required',
        ]);
    }

    public function getForm()
    {
        return request()->only(
            'code',
            'name',
            'parallel',
            'form_teacher_id',
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::paginate(request('perpage') ?? 10);
        return view('pages.grade.table', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grade = new Grade;
        return view('pages.grade.create', compact('grade'));
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
        $grade = Grade::create($this->getForm());
        return redirect(route('grades.create'))->with('success', 'Kelas berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        return view('pages.grade.detail', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('pages.grade.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $this->validateForm();
        $grade->update($this->getForm());
        return back()->with('success', 'Kelas berhasil diperbaharui');
    }

    public function confirmDelete(Grade $grade)
    {
        $action = route('grades.destroy', $grade->id);
        $message = "Apakah anda yakin ingin menghapus data kelas ".$grade->code."-".$grade->name;
        return view('partials.confirm-delete', compact('action', 'message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $success = redirect(route('grades.index'))->with('success', 'Kelas dengan kode:' . $grade->code . ' berhasil dihapus dari database');
        $grade->delete();
        return $success;
    }
}
