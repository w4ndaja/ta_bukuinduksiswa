@extends('layouts.app')
@section('title', 'Tambah Kelas Baru')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
                    <li class="breadcrumb-item active">Tambah Kelas Baru</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah Kelas Baru</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <x-grade.grade-form></x-grade.grade-form>
            </div>
        </div>
    </div>
</div>
@endsection
