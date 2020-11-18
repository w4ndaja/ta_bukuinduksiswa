@extends('layouts.app')
@section('title', $student->nis.' - '.$student->name)
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{route('students.index')}}">Siswa</a></li>
                    <li class="breadcrumb-item"><a href="#">{{$student->nis}} - {{$student->name}}</a></li>
                    <li class="breadcrumb-item active">Print</li>
                </ol>
            </div>
            <h4 class="page-title">
                <button class="btn btn-icon btn-info" onclick="window.print()"><i class="uil-print text-lg h3 m-1"></i> PRINT</button>
            </h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body h2 text-center">DATA SISWA {{$student->nis}} - {{$student->name}}</div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header h4">I. IDENTITAS</div>
                    <div class="card-body">
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.grade_id')</label>
                            <span class="col">: {{$student->grade->code}} - {{$student->grade->name}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.nis')</label>
                            <span class="col">: {{$student->nis}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.name')</label>
                            <span class="col">: {{$student->name}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.gender')</label>
                            <span class="col">: {{$student->gender}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.birth_place')</label>
                            <span class="col">: {{$student->birth_place}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.birth_date')</label>
                            <span class="col">: {{$student->birth_date}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.religion')</label>
                            <span class="col">: {{$student->religion}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.citizenship')</label>
                            <span class="col">: {{$student->citizenship}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.fam_order')</label>
                            <span class="col">: {{$student->fam_order}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.fam_count')</label>
                            <span class="col">: {{$student->fam_count}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.fam_status')</label>
                            <span class="col">: {{$student->fam_status}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.language')</label>
                            <span class="col">: {{$student->language}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.address')</label>
                            <span class="col">: {{$student->address}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.phone')</label>
                            <span class="col">: {{$student->phone}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.live_with')</label>
                            <span class="col">: {{$student->live_with}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.residence_distance')</label>
                            <span class="col">: {{$student->residence_distance}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.blood_type')</label>
                            <span class="col">: {{$student->blood_type}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.sick_history')</label>
                            <span class="col">: {{$student->sick_history}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.height')</label>
                            <span class="col">: {{$student->height}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.weight')</label>
                            <span class="col">: {{$student->weight}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.graduate_from')</label>
                            <span class="col">: {{$student->graduate_from}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.ijazah_year')</label>
                            <span class="col">: {{$student->ijazah_year}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.ijazah_sd_no')</label>
                            <span class="col">: {{$student->ijazah_sd_no}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.skhu_no')</label>
                            <span class="col">: {{$student->skhu_no}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.move_from')</label>
                            <span class="col">: {{$student->move_from}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.receive_at_grade_id')</label>
                            <span class="col">: {{$student->receiveAtGrade->code}} - {{$student->receiveAtGrade->name}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.date_received')</label>
                            <span class="col">: {{$student->date_received}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.hobby')</label>
                            <span class="col">: {{$student->hobby}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.leave_reason')</label>
                            <span class="col">: {{$student->leave_reason}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.finished_studying_at')</label>
                            <span class="col">: {{$student->finished_studying_at}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.ijazah_now_no')</label>
                            <span class="col">: {{$student->ijazah_now_no}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.skhu_now_no')</label>
                            <span class="col">: {{$student->skhu_now_no}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                @if($student->father)
                <div class="card">
                    <div class="card-header h4">II. AYAH</div>
                    <div class="card-body">
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.name')</label>
                            <span class="col">: {{$student->father->name}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.birth_place')</label>
                            <span class="col">: {{$student->father->birth_place}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.birth_date')</label>
                            <span class="col">: {{$student->father->birth_date}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.religion')</label>
                            <span class="col">: {{$student->father->religion}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.citizenship')</label>
                            <span class="col">: {{$student->father->citizenship}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.education')</label>
                            <span class="col">: {{$student->father->education}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.work')</label>
                            <span class="col">: {{$student->father->work}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.monthly_income')</label>
                            <span class="col">: {{$student->father->monthly_income}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.address')</label>
                            <span class="col">: {{$student->father->address}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.phone')</label>
                            <span class="col">: {{$student->father->phone}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.died_at')</label>
                            <span class="col">: {{$student->father->died_at}}</span>
                        </div>
                    </div>
                </div>
                @endif
                @if($student->mother)
                <div class="card">
                    <div class="card-header h4">III. IBU</div>
                    <div class="card-body">
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.name')</label>
                            <span class="col">: {{$student->mother->name}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.birth_place')</label>
                            <span class="col">: {{$student->mother->birth_place}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.birth_date')</label>
                            <span class="col">: {{$student->mother->birth_date}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.religion')</label>
                            <span class="col">: {{$student->mother->religion}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.citizenship')</label>
                            <span class="col">: {{$student->mother->citizenship}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.education')</label>
                            <span class="col">: {{$student->mother->education}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.work')</label>
                            <span class="col">: {{$student->mother->work}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.monthly_income')</label>
                            <span class="col">: {{$student->mother->monthly_income}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.address')</label>
                            <span class="col">: {{$student->mother->address}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.phone')</label>
                            <span class="col">: {{$student->mother->phone}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.died_at')</label>
                            <span class="col">: {{$student->mother->died_at}}</span>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @if($student->guardian)
            <div class="col-12">
                <div class="card">
                    <div class="card-header h4">IV. WALI</div>
                    <div class="card-body">
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.name')</label>
                            <span class="col">: {{$student->guardian->name}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.birth_place')</label>
                            <span class="col">: {{$student->guardian->birth_place}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.birth_date')</label>
                            <span class="col">: {{$student->guardian->birth_date}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.religion')</label>
                            <span class="col">: {{$student->guardian->religion}}</span>
                        </div>
                        <div class="form-group row m-0 p-0">
                            <label class="col-6 text-capitalize">@lang('validation.attributes.citizenship')</label>
                            <span class="col">: {{$student->guardian->citizenship}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
