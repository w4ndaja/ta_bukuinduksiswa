@extends('layouts.app')
@section('title', 'Tambah Siswa Baru')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                    <li class="breadcrumb-item active">Tambah Siswa Baru</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah Siswa Baru</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <x-student.student-form></x-student.student-form>
            </div>
        </div>
    </div>
</div>
@endsection
