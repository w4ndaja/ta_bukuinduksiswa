<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function validateForm()
    {
        request()->validate([
            'code' => 'required',
            'name' => 'required',
            'type' => 'required',
        ]);
    }

    public function getForm()
    {
        return request()->only(
            'code',
            'name',
            'type',
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::paginate(request('perpage') ?? 10);
        return view('pages.subject.table', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = new Subject;
        return view('pages.subject.create', compact('subject'));
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
        $subject = Subject::create($this->getForm());
        return redirect(route('subjects.create'))->with('success', 'Mata Pelajaran berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('pages.subject.detail', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('pages.subject.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $this->validateForm();
        $subject->update($this->getForm());
        return redirect(route('subjects.index'))->with('success', 'Mata Pelajaran berhasil diperbaharui');
    }

    public function confirmDelete(Subject $subject)
    {
        $action = route('subjects.destroy', $subject->id);
        $message = "Apakah anda yakin ingin menghapus data mata pelajaran ".$subject->code."-".$subject->name;
        return view('partials.confirm-delete', compact('action', 'message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $success = redirect(route('subjects.index'))->with('success', 'Mata Pelajaran dengan kode:' . $subject->code . ' berhasil dihapus dari database');
        $subject->delete();
        return $success;
    }
}
