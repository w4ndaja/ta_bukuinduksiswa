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
            <h4 class="page-title">
                <span class="text-light bg-info rounded px-3 py-1">Table Data Nilai</span>
            </h4>
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
                                <th class="text-nowrap position-sticky bg-light" style="right:0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lessonValues as $lessonValue)
                            <tr>
                                <td class="text-nowrap text-capitalize">{{$lessonValue->school_year}}</td>
                                <td class="text-nowrap text-capitalize">{{optional($lessonValue->grade)->code}} - {{optional($lessonValue->grade)->name}}</td>
                                <td class="text-nowrap text-capitalize">{{$lessonValue->nis}}</td>
                                <td class="text-nowrap text-capitalize">{{$lessonValue->semester}}</td>
                                <td class="text-nowrap text-capitalize">{{optional($lessonValue->subject)->code}} - {{optional($lessonValue->subject)->name}}</td>
                                <td class="text-nowrap text-capitalize">{{$lessonValue->value}}</td>
                                <td class="text-nowrap position-sticky bg-light" style="right:0">
                                    <div class="dropleft">
                                        <a class="btn btn-secondary dropdown-toggle" href role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-cog"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a href="{{route('lesson-values.edit', $lessonValue->id)}}" class="dropdown-item text-info">
                                                <i class="uil-edit text-lg h3 m-1"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a href="{{route('lesson-values.confirm-delete', $lessonValue->id)}}" class="dropdown-item text-danger">
                                                <i class="uil-trash text-lg h3 m-1"></i>
                                                <span>Hapus</span>
                                            </a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{$lessonValues->links()}}
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page title -->
@endsection