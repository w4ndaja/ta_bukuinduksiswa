@extends('layouts.app')
@section('title', 'Edit Nilai')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Nilai</a></li>
                    <li class="breadcrumb-item active">Edit Nilai</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Nilai</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <x-lesson-value.lesson-value-form method="patch" :action="route('lesson-values.update', $lessonValue->id)" :lesson-value="$lessonValue"></x-lesson-value.lesson-value-form>
            </div>
        </div>
    </div>
</div>
@endsection
