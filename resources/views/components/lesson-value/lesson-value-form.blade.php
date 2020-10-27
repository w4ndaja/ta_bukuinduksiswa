<x-form :action="$action" :method="$method">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.school_year')</label></div>
                <div class="col-md-8">
                    <x-input type="number" name="school_year" :placeholder="'Masukkan '.__('validation.attributes.school_year')" :value="$lessonValue->school_year"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.grade_id')</label></div>
                <div class="col-md-8">
                    <x-select name="grade_id" :placeholder="'Masukkan '.__('validation.attributes.grade_id')" :value="$lessonValue->grade_id" :options="$grades"></x-select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.nis')</label></div>
                <div class="col-md-8">
                    <x-select name="nis" :placeholder="'Masukkan '.__('validation.attributes.nis')" :value="$lessonValue->nis" :options="$students"></x-select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.semester')</label></div>
                <div class="col-md-8">
                    <x-input type="number" name="semester" :placeholder="'Masukkan '.__('validation.attributes.semester')" :value="$lessonValue->semester"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.subject_id')</label></div>
                <div class="col-md-8">
                    <x-select name="subject_id" :placeholder="'Masukkan '.__('validation.attributes.subject_id')" :value="$lessonValue->subject_id" :options="$subjects"></x-select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.value')</label></div>
                <div class="col-md-8">
                    <x-input type="number" name="value" :placeholder="'Masukkan '.__('validation.attributes.value')" :value="$lessonValue->value"></x-input>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group d-flex justify-content-end pt-3 mb-0">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</x-form>
