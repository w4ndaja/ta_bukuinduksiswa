<?php

namespace App\Http\Controllers;

use App\Models\SchoolIdentity;

class SchoolIdentityController extends Controller
{
    public function validateForm()
    {
        request()->validate([
            'name' => 'required',
            'address' => 'required',
            'village' => 'required',
            'distric' => 'required',
            'city' => 'required',
            'province' => 'required',
        ]);
    }
    public function getForm()
    {
        return request()->only(
            'name',
            'address',
            'village',
            'distric',
            'city',
            'province',
        );
    }
    public function index()
    {
        return view('pages.school-identity.index');
    }
    public function store()
    {
        $this->validateForm();
        SchoolIdentity::updateOrCreate([],$this->getForm());
        return redirect()->route('school-identity.index')->with('success', 'Identitas Sekolah berhasil diperbaharui');
    }
    public function show()
    {
        //
    }
    public function edit()
    {
        //
    }
    public function update()
    {
        //
    }
    public function destroy()
    {
        //
    }
}
