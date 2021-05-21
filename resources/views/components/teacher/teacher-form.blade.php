<x-form :action="$action" :method="$method">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.code')</label></div>
                <div class="col-md-8">
                    <x-input name="code" :placeholder="'Masukkan '.__('validation.attributes.code')" :value="$teacher->code"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.name')</label></div>
                <div class="col-md-8">
                    <x-input name="name" :placeholder="'Masukkan '.__('validation.attributes.name')" :value="$teacher->name"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.birth_place')</label></div>
                <div class="col-md-8">
                    <x-input name="birth_place" :placeholder="'Masukkan '.__('validation.attributes.birth_place')" :value="$teacher->birth_place"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.birth_date')</label></div>
                <div class="col-md-8">
                    <x-input type="date" name="birth_date" :placeholder="'Masukkan '.__('validation.attributes.birth_date')" :value="$teacher->birth_date"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.nuptk')</label></div>
                <div class="col-md-8">
                    <x-input type="number" name="nuptk" :placeholder="'Masukkan '.__('validation.attributes.nuptk')" :value="$teacher->nuptk"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.nip')</label></div>
                <div class="col-md-8">
                    <x-input type="number" name="nip" :placeholder="'Masukkan '.__('validation.attributes.nip')" :value="$teacher->nip"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.position')</label></div>
                <div class="col-md-8">
                    <x-input name="position" :placeholder="'Masukkan '.__('validation.attributes.position')" :value="$teacher->position"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.level')</label></div>
                <div class="col-md-8">
                    <x-input name="level" :placeholder="'Masukkan '.__('validation.attributes.level')" :value="$teacher->level"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.gender')</label></div>
                <div class="col-md-8">
                    <x-select name="gender" :placeholder="'Masukkan '.__('validation.attributes.gender')" :value="$teacher->gender" :options="[['label' => 'Pria', 'value' => 'pria'], ['label'=> 'Wanita', 'value'=> 'wanita']]"></x-select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.religion')</label></div>
                <div class="col-md-8">
                    <x-select name="religion" :placeholder="'Masukkan '.__('validation.attributes.religion')" :value="$teacher->religion" :options="$religions"></x-select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.address')</label></div>
                <div class="col-md-8">
                    <x-text-area name="address" :placeholder="'Masukkan '.__('validation.attributes.address')" :value="$teacher->address"></x-text-area>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.phone')</label></div>
                <div class="col-md-8">
                    <x-input name="phone" :placeholder="'Masukkan '.__('validation.attributes.phone')" :value="$teacher->phone"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.education')</label></div>
                <div class="col-md-8">
                    <x-select name="education" :placeholder="'Masukkan '.__('validation.attributes.education')" :value="$teacher->education" :options="$educations"></x-select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.status')</label></div>
                <div class="col-md-8">
                    <x-input name="status" :placeholder="'Masukkan '.__('validation.attributes.status')" :value="$teacher->status"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.work_start_date')</label></div>
                <div class="col-md-8">
                    <x-input type="date" name="work_start_date" :placeholder="'Masukkan '.__('validation.attributes.work_start_date')" :value="$teacher->work_start_date"></x-input>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group d-flex justify-content-end pt-3 mb-0">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</x-form>
