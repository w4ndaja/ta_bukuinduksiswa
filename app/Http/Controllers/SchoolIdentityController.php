<?php

namespace App\Http\Controllers;

use App\Models\SchoolIdentity;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $this->validateForm();
        SchoolIdentity::updateOrCreate([],$this->getForm());
        return redirect()->route('school-identity.index')->with('success', 'Identitas Sekolah berhasil diperbaharui');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
