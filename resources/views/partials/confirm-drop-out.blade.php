@extends('layouts.app')
@section('title', 'Konfirmasi Keluarkan Siswa')
@section('content')
<div class="container-fluid d-flex justify-content-center py-5">
    <x-form method="delete" action="{{route('students.drop-out', $student->id)}}">
        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Peringatan!</h4>
            <p>Apakah anda yakin ingin mengeluarkan siswa dengan nis = {{$student->nis}}, nama = {{$student->name}}</p>
            <hr>
            <div class="form-group">
                <x-input name="out_reason" placeholder="Masukkan alasan keluar"></x-input>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="{{url()->previous()}}" type="submit" class="btn btn-info">Kembali</a>
            </div>
        </div>
    </x-form>
</div>
@endsection
