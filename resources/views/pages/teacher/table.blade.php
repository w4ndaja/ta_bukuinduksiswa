@extends('layouts.app')
@section('title', 'Table Data Guru')
@section('content')
<!-- start page title -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Guru</a></li>
                    <li class="breadcrumb-item active">Tabel Data Guru</li>
                </ol>
            </div>
            <h4 class="page-title">Table Data Guru</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <a href="{{route('teachers.create')}}" class="btn btn-primary">Tambah Guru</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive shadow-sm">
                    <table class="table table-sm table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.code')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.name')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.birth_place')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.birth_date')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.nuptk')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.nip')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.position')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.level')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.gender')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.religion')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.address')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.phone')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.education')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.status')</th>
                                <th class="text-nowrap text-capitalize">@lang('validation.attributes.work_start_date')</th>
                                <th class="text-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $teacher)
                            <tr>
                                <td class="text-nowrap position-sticky">{{$teacher->code}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->name}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->birth_place}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->birth_date}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->nuptk}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->nip}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->position}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->level}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->gender}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->religion}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->address}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->phone}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->education}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->status}}</td>
                                <td class="text-nowrap position-sticky">{{$teacher->work_start_date}}</td>
                                <td class="text-nowrap position-sticky d-flex flex-row">
                                    <a href="{{route('teachers.edit', $teacher->id)}}" class="btn btn-sm mr-1 btn-info">Edit</a>
                                    <a href="{{route('teachers.confirm-delete', $teacher->id)}}" class="btn btn-sm mr-1 btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{$teachers->links()}}
            </div>
        </div>
    </div>
</div>

</div>
<!-- end page title -->
@endsection
