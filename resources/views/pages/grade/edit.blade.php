@extends('layouts.app')
@section('title', 'Edit Kelas '.$grade->code.' - '.$grade->name)
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
                    <li class="breadcrumb-item active">Edit Kelas {{$grade->code}} - {{$grade->name}}</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Kelas {{$grade->code}} - {{$grade->name}}</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <x-grade.grade-form method="patch" :action="route('grades.update', $grade->id)" :grade="$grade"></x-grade.grade-form>
            </div>
        </div>
    </div>
</div>
@endsection
