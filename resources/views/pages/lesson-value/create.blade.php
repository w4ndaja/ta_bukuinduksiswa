@extends('layouts.app')
@section('title', 'Tambah Nilai Baru')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Nilai</a></li>
                    <li class="breadcrumb-item active">Tambah Nilai Baru</li>
                </ol>
            </div>
            <h4 class="page-title">
                <span class="text-light bg-info rounded px-3 py-1">Tambah Nilai Baru</span>
            </h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <x-lesson-value.lesson-value-form></x-lesson-value.lesson-value-form>
            </div>
        </div>
    </div>
</div>
@endsection
