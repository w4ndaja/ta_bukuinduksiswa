@extends('layouts.app')
@section('title', 'Table Data Siswa Keluar')
@section('content')
<!-- start page title -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                    <li class="breadcrumb-item active">Tabel Data Siswa Keluar</li>
                </ol>
            </div>
            <h4 class="page-title">
                <span class="bg-danger text-light rounded py-1 px-3">Table Data Siswa Keluar</span>
            </h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('students.moved')}}" method="get">
                    <div class="form-group d-flex" style="gap:1rem">
                        <label for="inputQuery" class="col-form-label">Cari : </label>
                        <div class="d-flex justify-content-between align-items-center" style="gap:1rem">
                            <input type="text" name="query" id="inputQuery" class="form-control form-control-sm" value="{{request('query')}}">
                            <button type="submit" class="btn btn-sm btn-primary btn-rounded"><i class="dripicons-search"></i></button>
                            @if(request('query'))
                                <a href="{{route('students.moved')}}" class="btn btn-sm btn-warning btn-rounded"><i class="dripicons-clockwise"></i></a>
                            @endif
                        </div>
                    </div>
                </form>
                <div class="table-responsive shadow-sm">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-nowrap">NIS</th>
                                <th class="text-nowrap">Nama Siswa</th>
                                <th class="text-nowrap">Jenis Kelamin</th>
                                <th class="text-nowrap">Tempat Lahir</th>
                                <th class="text-nowrap">Tanggal Lahir</th>
                                <th class="text-nowrap">Alasan Keluar</th>
                                <th class="text-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $key => $student)
                            <tr>
                                <td class="text-nowrap">{{$student->nis}}</td>
                                <td class="text-nowrap">{{$student->name}}</td>
                                <td class="text-nowrap">{{$student->gender}}</td>
                                <td class="text-nowrap">{{$student->birth_place}}</td>
                                <td class="text-nowrap">{{$student->birth_date}}</td>
                                <td class="text-nowrap">{{$student->dropOut->out_reason}}</td>
                                <td class="text-nowrap d-flex flex-row">
                                    <a href="{{route('students.confirm-drop-in', $student->id)}}" class="btn btn-success ml-1 btn-sm">Drop In</a>
                                    <a href="{{route('students.print', $student->id)}}" class="btn btn-info ml-1 btn-sm">PRINT DATA</a>
                                    <a href="{{route('students.lesson-result-print', $student->id)}}" class="btn btn-info ml-1 btn-sm">PRINT NILAI</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                {{$students->links()}}
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page title -->
@endsection
