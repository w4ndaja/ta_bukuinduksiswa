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
            <h4 class="page-title">Table Mata Pelajaran</h4>
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
                                <th class="text-nowrap text-capitalize">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subjects as $key => $subject)
                            <tr>
                                <td class="text-nowrap">{{$subject->code}}</td>
                                <td class="text-nowrap">{{$subject->name}}</td>
                                <td class="text-nowrap">{{$subject->type}}</td>
                                <td class="text-wrap position-sticy d-flex flex-row">
                                    <a href="{{route('subjects.edit', $subject->id)}}" class="btn btn-sm mr-1 btn-info">Edit</a>
                                    <a href="{{route('subjects.confirm-delete', $subject->id)}}" class="btn btn-sm mr-1 btn-danger">Hapus</a>
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
