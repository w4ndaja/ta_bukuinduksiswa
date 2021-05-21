@extends('layouts.app')
@section('title', 'Konfirmasi Hapus')
@section('content')
<div class="container-fluid d-flex justify-content-center py-5">
    <x-form method="delete" :action="$action">
        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Peringatan!</h4>
            <p>{{$message}}</p>
            <hr>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="{{url()->previous()}}" type="submit" class="btn btn-info">Kembali</a>
            </div>
        </div>
    </x-form>
</div>
@endsection
