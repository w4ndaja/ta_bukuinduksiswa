@extends('layouts.app')
@section('title', 'Konfirmasi Masukkan Siswa')
@section('content')
<div class="container-fluid d-flex justify-content-center py-5">
    <x-form method="delete" action="{{route('students.drop-in', $student->id)}}">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Peringatan!</h4>
            <p>Apakah anda yakin ingin memasukkan kembali siswa dengan nis = {{$student->nis}}, nama = {{$student->name}}</p>
            <hr>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Masukkan Kembali</button>
                <a href="{{url()->previous()}}" type="submit" class="btn btn-info">Kembali</a>
            </div>
        </div>
    </x-form>
</div>
@endsection
