@extends('layouts.app')
@section('title', 'Edit Siswa '.$student->nis.' - '.$student->name)
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                    <li class="breadcrumb-item active">Edit Siswa {{$student->nis}} {{$student->name}}</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Siswa {{$student->nis}} {{$student->name}}</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <x-student.student-form method="patch" :action="route('students.update', $student->id)" :student="$student"></x-student.student-form>
            </div>
        </div>
    </div>
</div>
@endsection
