@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12 mt-3 d-flex flex-grow flex-column align-items-center">
        <div class="alert alert-success h4">Selamat Datang</div>
        <img src="{{asset('assets/images/smp_logo.png')}}" alt="" width="320">
    </div>
</div>
<!-- end page title -->
@endsection
