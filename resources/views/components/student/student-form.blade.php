<ul class="nav nav-tabs mb-3">
    <li class="nav-item">
        <a href="#identity" data-toggle="tab" class="nav-link {{session('parent') ? '' : 'active'}}">
            <i class="mdi mdi-home-variant d-md-none d-block"></i>
            <span class="d-none d-md-block">Identitas</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#dad" data-toggle="tab" class="nav-link {{session('father')  ?'active' : ''}} {{$method == 'patch' ? '' : 'disabled bg-light text-muted'}}">
            <i class="mdi mdi-human-male d-md-none d-block"></i>
            <span class="d-none d-md-block">Ayah</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#mom" data-toggle="tab" class="nav-link {{session('mother') ? 'active' : ''}} {{$method == 'patch' ? '' : 'disabled bg-light text-muted'}}">
            <i class="mdi mdi-human-female d-md-none d-block"></i>
            <span class="d-none d-md-block">Ibu</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#guardian" data-toggle="tab" class="nav-link {{session('guardian') ? 'active' : ''}} {{$method == 'patch' ? '' : 'disabled bg-light text-muted'}}">
            <i class="mdi mdi-human-female-girl d-md-none d-block"></i>
            <span class="d-none d-md-block">Wali</span>
        </a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane {{session('parent') ? '' : 'show active'}}" id="identity">
        <x-form :action="$action" :method="$method">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.grade_id')</label> </div>
                        <div class="col-md-8">
                            <x-select name="grade_id" :placeholder="'Masukkan '.__('validation.attributes.grade_id')" :value="$student->grade_id" :options="$grades" {{-- create-data-route="grades.create" --}}></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.nis')</label> </div>
                        <div class="col-md-8">
                            <x-input type="number" name="nis" :placeholder="'Masukkan '.__('validation.attributes.nis')" :value="$student->nis" :autofocus="true"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.name')</label> </div>
                        <div class="col-md-8">
                            <x-input name="name" :placeholder="'Masukkan '.__('validation.attributes.name')" :value="$student->name"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.gender')</label> </div>
                        <div class="col-md-8">
                            <x-input name="gender" :placeholder="'Masukkan '.__('validation.attributes.gender')" :value="$student->gender"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.birth_place')</label> </div>
                        <div class="col-md-8">
                            <x-input name="birth_place" :placeholder="'Masukkan '.__('validation.attributes.birth_place')" :value="$student->birth_place"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.birth_date')</label> </div>
                        <div class="col-md-8">
                            <x-input type="date" name="birth_date" :placeholder="'Masukkan '.__('validation.attributes.birth_date')" :value="$student->birth_date"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.religion')</label> </div>
                        <div class="col-md-8">
                            <x-select name="religion" :placeholder="'Masukkan '.__('validation.attributes.religion')" :value="$student->religion" :options="$religions"></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.citizenship')</label> </div>
                        <div class="col-md-8">
                            <x-select name="citizenship" :placeholder="'Masukkan '.__('validation.attributes.citizenship')" :value="$student->citizenship" :options="$cityzenships"></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.fam_order')</label> </div>
                        <div class="col-md-8">
                            <x-input type="number" name="fam_order" :placeholder="'Masukkan '.__('validation.attributes.fam_order')" :value="$student->fam_order"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.fam_count')</label> </div>
                        <div class="col-md-8">
                            <x-input type="number" name="fam_count" :placeholder="'Masukkan '.__('validation.attributes.fam_count')" :value="$student->fam_count"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.fam_status')</label> </div>
                        <div class="col-md-8">
                            <x-input name="fam_status" :placeholder="'Masukkan '.__('validation.attributes.fam_status')" :value="$student->fam_status"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.language')</label> </div>
                        <div class="col-md-8">
                            <x-input name="language" :placeholder="'Masukkan '.__('validation.attributes.language')" :value="$student->language"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.address')</label> </div>
                        <div class="col-md-8">
                            <x-text-area name="address" :placeholder="'Masukkan '.__('validation.attributes.address')" :value="$student->address"></x-text-area>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.phone')</label> </div>
                        <div class="col-md-8">
                            <x-input name="phone" :placeholder="'Masukkan '.__('validation.attributes.phone')" :value="$student->phone"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.live_with')</label> </div>
                        <div class="col-md-8">
                            <x-input name="live_with" :placeholder="'Masukkan '.__('validation.attributes.live_with')" :value="$student->live_with"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.residence_distance')</label> </div>
                        <div class="col-md-8">
                            <x-input type="text" name="residence_distance" :placeholder="'Masukkan '.__('validation.attributes.residence_distance')" :value="$student->residence_distance"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.blood_type')</label> </div>
                        <div class="col-md-8">
                            <x-input name="blood_type" :placeholder="'Masukkan '.__('validation.attributes.blood_type')" :value="$student->blood_type"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.sick_history')</label> </div>
                        <div class="col-md-8">
                            <x-text-area name="sick_history" :placeholder="'Masukkan '.__('validation.attributes.sick_history')" :value="$student->sick_history"></x-text-area>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.height')</label> </div>
                        <div class="col-md-8 row">
                            <div class="col-10 pr-0">
                                <x-input type="number" name="height" :placeholder="'Masukkan '.__('validation.attributes.height')" :value="$student->height"></x-input>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center rounded-right bg-info text-white ml-n1">CM</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.weight')</label> </div>
                        <div class="col-md-8 row">
                            <div class="col-10 pr-0">
                                <x-input type="number" name="weight" :placeholder="'Masukkan '.__('validation.attributes.weight')" :value="$student->weight"></x-input>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center rounded-right bg-info text-white ml-n1">KG</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.graduate_from')</label> </div>
                        <div class="col-md-8">
                            <x-input name="graduate_from" :placeholder="'Masukkan '.__('validation.attributes.graduate_from')" :value="$student->graduate_from"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.ijazah_year')</label> </div>
                        <div class="col-md-8">
                            <x-input type="number" name="ijazah_year" :placeholder="'Masukkan '.__('validation.attributes.ijazah_year')" :value="$student->ijazah_year"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.ijazah_sd_no')</label> </div>
                        <div class="col-md-8">
                            <x-input name="ijazah_sd_no" :placeholder="'Masukkan '.__('validation.attributes.ijazah_sd_no')" :value="$student->ijazah_sd_no"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.skhu_no')</label> </div>
                        <div class="col-md-8">
                            <x-input name="skhu_no" :placeholder="'Masukkan '.__('validation.attributes.skhu_no')" :value="$student->skhu_no"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.move_from')</label> </div>
                        <div class="col-md-8">
                            <x-input name="move_from" :placeholder="'Masukkan '.__('validation.attributes.move_from')" :value="$student->move_from"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.receive_at_grade_id')</label> </div>
                        <div class="col-md-8">
                            <x-select name="receive_at_grade_id" :placeholder="'Masukkan '.__('validation.attributes.receive_at_grade_id')" :value="$student->receive_at_grade_id" :options="$grades"></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.date_received')</label> </div>
                        <div class="col-md-8">
                            <x-input type="date" name="date_received" :placeholder="'Masukkan '.__('validation.attributes.date_received')" :value="$student->date_received"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.hobby')</label> </div>
                        <div class="col-md-8">
                            <x-input name="hobby" :placeholder="'Masukkan '.__('validation.attributes.hobby')" :value="$student->hobby"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.leave_reason')</label> </div>
                        <div class="col-md-8">
                            <x-text-area name="leave_reason" :placeholder="'Masukkan '.__('validation.attributes.leave_reason')" :value="$student->leave_reason"></x-text-area>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.finished_studying_at')</label> </div>
                        <div class="col-md-8">
                            <x-input type="date" name="finished_studying_at" :placeholder="'Masukkan '.__('validation.attributes.finished_studying_at')" :value="$student->finished_studying_at"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.ijazah_now_no')</label> </div>
                        <div class="col-md-8">
                            <x-input name="ijazah_now_no" :placeholder="'Masukkan '.__('validation.attributes.ijazah_now_no')" :value="$student->ijazah_now_no"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.skhu_now_no')</label> </div>
                        <div class="col-md-8">
                            <x-input name="skhu_now_no" :placeholder="'Masukkan '.__('validation.attributes.skhu_now_no')" :value="$student->skhu_now_no"></x-input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end pt-3 mb-0">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </x-form>
    </div>
    <div class="tab-pane {{session('father') ? 'show active' : ''}}" id="dad">
        <x-form :action="route('fathers.update', $student->id ?? 0)" method="patch">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.name')</label> </div>
                        <div class="col-md-8">
                            <x-input name="name" :placeholder="'Masukkan '.__('validation.attributes.name')" :value="$father->name"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.birth_place')</label> </div>
                        <div class="col-md-8">
                            <x-input name="birth_place" :placeholder="'Masukkan '.__('validation.attributes.birth_place')" :value="$father->birth_place"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.birth_date')</label> </div>
                        <div class="col-md-8">
                            <x-input type="date" name="birth_date" :placeholder="'Masukkan '.__('validation.attributes.birth_date')" :value="$father->birth_date"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.religion')</label> </div>
                        <div class="col-md-8">
                            <x-select name="religion" :placeholder="'Masukkan '.__('validation.attributes.religion')" :value="$father->religion" :options="$religions"></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.citizenship')</label> </div>
                        <div class="col-md-8">
                            <x-select name="citizenship" :placeholder="'Masukkan '.__('validation.attributes.citizenship')" :value="$father->citizenship" :options="$cityzenships"></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.education')</label> </div>
                        <div class="col-md-8">
                            <x-select name="education" :placeholder="'Masukkan '.__('validation.attributes.education')" :value="$father->education" :options="$educations"></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.work')</label> </div>
                        <div class="col-md-8">
                            <x-input name="work" :placeholder="'Masukkan '.__('validation.attributes.work')" :value="$father->work"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.monthly_income')</label> </div>
                        <div class="col-md-8">
                            <x-input type="number" name="monthly_income" :placeholder="'Masukkan '.__('validation.attributes.monthly_income')" :value="$father->monthly_income"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.address')</label> </div>
                        <div class="col-md-8">
                            <x-textarea name="address" :placeholder="'Masukkan '.__('validation.attributes.address')" :value="$father->address"></x-textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.phone')</label> </div>
                        <div class="col-md-8">
                            <x-input name="phone" :placeholder="'Masukkan '.__('validation.attributes.phone')" :value="$father->phone"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.died_at')</label> </div>
                        <div class="col-md-8">
                            <x-input type="date" name="died_at" :placeholder="'Masukkan '.__('validation.attributes.died_at')" :value="$father->died_at"></x-input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end pt-3 mb-0">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </x-form>
    </div>
    <div class="tab-pane {{session('mother') ? 'show active' : ''}}" id="mom">
        <x-form :action="route('mothers.update', $student->id ?? 0)" method="patch">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.name')</label> </div>
                        <div class="col-md-8">
                            <x-input name="name" :placeholder="'Masukkan '.__('validation.attributes.name')" :value="$mother->name"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.birth_place')</label> </div>
                        <div class="col-md-8">
                            <x-input name="birth_place" :placeholder="'Masukkan '.__('validation.attributes.birth_place')" :value="$mother->birth_place"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.birth_date')</label> </div>
                        <div class="col-md-8">
                            <x-input type="date" name="birth_date" :placeholder="'Masukkan '.__('validation.attributes.birth_date')" :value="$mother->birth_date"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.religion')</label> </div>
                        <div class="col-md-8">
                            <x-select name="religion" :placeholder="'Masukkan '.__('validation.attributes.religion')" :value="$mother->religion" :options="$religions"></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.citizenship')</label> </div>
                        <div class="col-md-8">
                            <x-select name="citizenship" :placeholder="'Masukkan '.__('validation.attributes.citizenship')" :value="$mother->citizenship" :options="$cityzenships"></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.education')</label> </div>
                        <div class="col-md-8">
                            <x-select name="education" :placeholder="'Masukkan '.__('validation.attributes.education')" :value="$mother->education" :options="$educations"></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.work')</label> </div>
                        <div class="col-md-8">
                            <x-input name="work" :placeholder="'Masukkan '.__('validation.attributes.work')" :value="$mother->work"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.monthly_income')</label> </div>
                        <div class="col-md-8">
                            <x-input type="number" name="monthly_income" :placeholder="'Masukkan '.__('validation.attributes.monthly_income')" :value="$mother->monthly_income"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.address')</label> </div>
                        <div class="col-md-8">
                            <x-textarea name="address" :placeholder="'Masukkan '.__('validation.attributes.address')" :value="$mother->address"></x-textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.phone')</label> </div>
                        <div class="col-md-8">
                            <x-input name="phone" :placeholder="'Masukkan '.__('validation.attributes.phone')" :value="$mother->phone"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.died_at')</label> </div>
                        <div class="col-md-8">
                            <x-input type="date" name="died_at" :placeholder="'Masukkan '.__('validation.attributes.died_at')" :value="$mother->died_at"></x-input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end pt-3 mb-0">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </x-form>
    </div>
    <div class="tab-pane {{session('guardian') ? 'show active' : ''}}" id="guardian">
        <x-form :action="route('guardians.update', $student->id ?? 0)" method="patch">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.name')</label> </div>
                        <div class="col-md-8">
                            <x-input name="name" :placeholder="'Masukkan '.__('validation.attributes.name')" :value="$guardian->name"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.birth_place')</label> </div>
                        <div class="col-md-8">
                            <x-input name="birth_place" :placeholder="'Masukkan '.__('validation.attributes.birth_place')" :value="$guardian->birth_place"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.birth_date')</label> </div>
                        <div class="col-md-8">
                            <x-input type="date" name="birth_date" :placeholder="'Masukkan '.__('validation.attributes.birth_date')" :value="$guardian->birth_date"></x-input>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.religion')</label> </div>
                        <div class="col-md-8">
                            <x-select name="religion" :placeholder="'Masukkan '.__('validation.attributes.religion')" :value="$guardian->religion" :options="$religions"></x-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-4"> <label class="text-capitalize">@lang('validation.attributes.citizenship')</label> </div>
                        <div class="col-md-8">
                            <x-select name="citizenship" :placeholder="'Masukkan '.__('validation.attributes.citizenship')" :value="$guardian->citizenship" :options="$cityzenships"></x-select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group d-flex justify-content-end pt-3 mb-0">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </x-form>
    </div>
</div>
