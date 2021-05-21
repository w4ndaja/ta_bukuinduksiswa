@extends('layouts.app')
@section('title', $student->nis.' - '.$student->name)
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{route('students.index')}}">Siswa</a></li>
                    <li class="breadcrumb-item"><a href="#">{{$student->nis}} - {{$student->name}}</a></li>
                    <li class="breadcrumb-item active">Print</li>
                </ol>
            </div>
            <h4 class="page-title">
                <button class="btn btn-icon btn-info" onclick="window.print()"><i class="uil-print text-lg h3 m-1"></i> PRINT</button>
            </h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body h2 text-center">DATA NILAI SISWA {{$student->nis}} - {{$student->name}}</div>
        </div>
        <div class="card">
            @foreach ($student->lessonResults->sortBy('semester')->sortBy('subject_id')->groupBy('semester') as $semester => $values)
            <div class="card-header h4">Semester {{$semester}}</div>
            <div class="card-body">
                @foreach($values as $value)
                <div class="form-group row m-0 p-0">
                    <label class="col-4 text-capitalize">{{$value->subject->name}}</label>
                    <span class="col">: {{$value->value}}</span>
                </div>
                @endforeach
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
