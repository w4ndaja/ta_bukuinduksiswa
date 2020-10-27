@extends('layouts.app')
@section('title', 'Tambah Mata Pelajaran Baru')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Mata Pelajaran</a></li>
                    <li class="breadcrumb-item active">Tambah Mata Pelajaran Baru</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah Mata Pelajaran Baru</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <x-subject.subject-form></x-subject.subject-form>
            </div>
        </div>
    </div>
</div>
@endsection
