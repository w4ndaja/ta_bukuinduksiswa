@extends('layouts.app')
@section('title', 'Table Data Kelas')
@section('content')
<!-- start page title -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Kelas</a></li>
                    <li class="breadcrumb-item active">Tabel Data Kelas</li>
                </ol>
            </div>
            <h4 class="page-title">
                <span class="bg-info text-light px-3 py-1 rounded">Table Data Kelas</span>
            </h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <a href="{{route('grades.create')}}" class="btn btn-primary">Tambah Kelas</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive shadow-sm">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-nowrap text-capitalize">No</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.code')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.name')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.parallel')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.form_teacher_id')</th>
                                <th class="text-nowrap text-capitalize">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($grades as $key => $grade)
                            <tr>
                                <td class="text-nowrap">{{$key + 1}}</td>
                                <td class="text-wrap">{{$grade->code}}</td>
                                <td class="text-wrap ">{{$grade->name}}</td>
                                <td class="text-wrap ">{{$grade->parallel}}</td>
                                <td class="text-wrap ">{{$grade->formTeacher->code}} - {{$grade->formTeacher->name}}</td>
                                <td class="text-wrap  d-flex flex-row">
                                    <a href="{{route('grades.edit', $grade->id)}}" class="btn btn-sm mr-1 btn-info">Edit</a>
                                    <a href="{{route('grades.confirm-delete', $grade->id)}}" class="btn btn-sm mr-1 btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{$grades->links()}}
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page title -->
@endsection
