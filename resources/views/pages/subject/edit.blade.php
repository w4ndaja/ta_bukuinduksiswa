@extends('layouts.app')
@section('title', 'Edit Mata Pelajaran '.$subject->code.':'.$subject->name)
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Mata Pelajaran</a></li>
                    <li class="breadcrumb-item active">Edit Mata Pelajaran {{$subject->code}}:{{$subject->name}}</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Mata Pelajaran {{$subject->code}}:{{$subject->name}}</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <x-subject.subject-form method="patch" :action="route('subjects.update', $subject->id)" :subject="$subject"></x-subject.subject-form>
            </div>
        </div>
    </div>
</div>
@endsection
