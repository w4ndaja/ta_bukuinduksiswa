<?php

namespace App\Http\Controllers;

use App\Models\LessonValue;
use Illuminate\Http\Request;

class LessonValueController extends Controller
{

    public function validateForm()
    {
        request()->validate([
            'school_year' => 'required',
            'grade_id' => 'required',
            'nis' => 'required',
            'semester' => 'required',
            'subject_id' => 'required',
            'value' => 'required',
        ]);
    }

    public function getForm()
    {
        return request()->only(
            'school_year',
            'grade_id',
            'nis',
            'semester',
            'subject_id',
            'value',
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessonValues = LessonValue::paginate(request('perpage') ?? 10);
        return view('pages.lesson-value.table', compact('lessonValues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lessonValue = new LessonValue;
        return view('pages.lesson-value.create', compact('lessonValue'));
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
        $lessonValue = LessonValue::create($this->getForm());
        return redirect(route('lesson-values.create'))->with('success', 'Nilai berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LessonValue  $lessonValue
     * @return \Illuminate\Http\Response
     */
    public function show(LessonValue $lessonValue)
    {
        return view('pages.lesson-value.detail', compact('lessonValue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LessonValue  $lessonValue
     * @return \Illuminate\Http\Response
     */
    public function edit(LessonValue $lessonValue)
    {
        return view('pages.lesson-value.edit', compact('lessonValue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LessonValue  $lessonValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LessonValue $lessonValue)
    {
        $this->validateForm();
        $lessonValue->update($this->getForm());
        return back()->with('success', 'Nilai berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LessonValue  $lessonValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(LessonValue $lessonValue)
    {
        $success = redirect('lessonValue.index')->with('success', 'Nilai dengan id:' . $lessonValue->id . ' berhasil dihapus dari database');
        $lessonValue->delete();
        return $success;
    }
}
