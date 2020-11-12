@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
<!-- start page title -->
<div class="row mt-3 justify-content-around">
    <div class="col-12 d-flex justify-content-center my-3">
        <div class="alert alert-success shadow-sm h4 border-0">--- Selamat Datang ---</div>
    </div>
    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
        <div class="card widget-flat">
            <div class="card-body">
                <h5 class="text-muted font-weight-normal mt-0" title="Siswa">Siswa</h5>
                <h3 class="mt-3 mb-3">{{$counter['students']}}</h3>
                <p class="mb-0 text-muted">
                    <span class="badge badge-info mr-1">
                    <span class="text-nowrap">Total Siswa</span>
                </p>
            </div>
        </div>
    </div> <!-- end col-->
    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
        <div class="card widget-flat">
            <div class="card-body">
                <h5 class="text-muted font-weight-normal mt-0" title="Siswa">Guru</h5>
                <h3 class="mt-3 mb-3">{{$counter['teachers']}}</h3>
                <p class="mb-0 text-muted">
                    <span class="badge badge-info mr-1">
                    <span class="text-nowrap">Total Guru</span>
                </p>
            </div>
        </div>
    </div> <!-- end col-->
    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
        <div class="card widget-flat">
            <div class="card-body">
                <h5 class="text-muted font-weight-normal mt-0" title="Siswa">Kelas</h5>
                <h3 class="mt-3 mb-3">{{$counter['grades']}}</h3>
                <p class="mb-0 text-muted">
                    <span class="badge badge-info mr-1">
                    <span class="text-nowrap">Total Kelas</span>
                </p>
            </div>
        </div>
    </div> <!-- end col-->
    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
        <div class="card widget-flat">
            <div class="card-body">
                <h5 class="text-muted font-weight-normal mt-0" title="Siswa">Mata Pelajaran</h5>
                <h3 class="mt-3 mb-3">{{$counter['subjects']}}</h3>
                <p class="mb-0 text-muted">
                    <span class="badge badge-info mr-1">
                    <span class="text-nowrap">Total Mata Pelajaran</span>
                </p>
            </div>
        </div>
    </div> <!-- end col-->
</div>

<div class="row">
    <div class="col-12 mt-3 d-flex flex-grow flex-column align-items-center">
        <img src="{{asset('assets/images/smp_logo.png')}}" alt="" width="320" class="shadow p-3 rounded">
    </div>
</div>
<!-- end page title -->
@endsection
