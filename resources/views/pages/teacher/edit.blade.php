@extends('layouts.app')
@section('title', 'Edit Guru Baru')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Guru</a></li>
                    <li class="breadcrumb-item active">Edit Guru {{$teacher->nip}} - {{$teacher->name}}</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Guru {{$teacher->nip}} - {{$teacher->name}}</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <x-teacher.teacher-form method="patch" :action="route('teachers.update', $teacher->id)" :teacher="$teacher"></x-teacher.teacher-form>
            </div>
        </div>
    </div>
</div>
@endsection
