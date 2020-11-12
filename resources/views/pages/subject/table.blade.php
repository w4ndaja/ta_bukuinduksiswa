@extends('layouts.app')
@section('title', 'Table Mata Pelajaran')
@section('content')
<!-- start page title -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Mata Pelajaran</a></li>
                    <li class="breadcrumb-item active">Tabel Mata Pelajaran</li>
                </ol>
            </div>
            <h4 class="page-title"><span class="text-light bg-info rounded px-3 py-1">Table Mata Pelajaran</span></h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <a href="{{route('subjects.create')}}" class="btn btn-primary">Tambah Mata Pelajaran</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive shadow-sm">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.code')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.name')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.type')</th>
                                <th class="text-nowrap text-capitalize position-sticky bg-light" style="right:0" width="80">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subjects as $key => $subject)
                            <tr>
                                <td class="text-nowrap">{{$subject->code}}</td>
                                <td class="text-nowrap">{{$subject->name}}</td>
                                <td class="text-nowrap">{{$subject->type}}</td>
                                <td class="text-nowrap position-sticky bg-light" style="right:0">
                                    <div class="dropleft">
                                        <a class="btn btn-secondary dropdown-toggle" href role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil-cog"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a href="{{route('subjects.edit', $subject->id)}}" class="dropdown-item text-info">
                                                <i class="uil-edit text-lg h3 m-1"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a href="{{route('subjects.confirm-delete', $subject->id)}}" class="dropdown-item text-danger">
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
                {{$subjects->links()}}
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page title -->
@endsection
