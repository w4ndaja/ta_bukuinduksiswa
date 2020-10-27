@extends('layouts.app')
@section('title', 'Table Data Nilai')
@section('content')
<!-- start page title -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Nilai</a></li>
                    <li class="breadcrumb-item active">Tabel Data Nilai</li>
                </ol>
            </div>
            <h4 class="page-title">Table Data Nilai</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <a href="{{route('lesson-values.create')}}" class="btn btn-primary">Tambah Nilai</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive shadow-sm">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.school_year')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.grade_id')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.nis')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.semester')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.subject_id')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.value')</th>
                                <th class="text-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lessonValues as $lessonValue)
                            <tr>
                                <td class="text-nowrap">{{$lessonValue->school_year}}</td>
                                <td class="text-nowrap">{{$lessonValue->grade_id}}</td>
                                <td class="text-nowrap">{{$lessonValue->nis}}</td>
                                <td class="text-nowrap">{{$lessonValue->semester}}</td>
                                <td class="text-nowrap">{{$lessonValue->subject_id}}</td>
                                <td class="text-nowrap">{{$lessonValue->value}}</td>
                                <td class="text-nowrap position-sticky d-flex flex-row">
                                    <a href="{{route('lesson-values.edit', $lessonValue->id)}}" class="btn btn-sm mr-1 btn-info">Edit</a>
                                    <a href="{{route('lesson-values.confirm-delete', $lessonValue->id)}}" class="btn btn-sm mr-1 btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <span class="text-info">Menampilkan 10 dari 100 data yang di filter</span>
                <span class="text-info">Total 200 data</span>
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page title -->
@endsection
