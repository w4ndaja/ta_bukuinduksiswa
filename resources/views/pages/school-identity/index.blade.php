@extends('layouts.app')
@section('title', 'Identitas Sekolah')
@section('content')
<!-- start page title -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item active">Identitas Sekolah</li>
                </ol>
            </div>
            <h4 class="page-title"><span class="text-white bg-info rounded px-3 py-1">Identitas Sekolah</span></h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">Pengaturan</div>
            <div class="card-body">
                <x-school-identity-form></x-school-identity-form>
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page title -->
@endsection
