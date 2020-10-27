<x-form :action="$action" :method="$method">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4 label text-capitalize">@lang('validation.attributes.code')</div>
                <div class="col-md-8">
                    <x-input name="code" :placeholder="'Masukkan '.__('validation.attributes.code')" :value="$grade->code"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4 label text-capitalize">@lang('validation.attributes.name')</div>
                <div class="col-md-8">
                    <x-input name="name" :placeholder="'Masukkan '.__('validation.attributes.name')" :value="$grade->name"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4 label text-capitalize">@lang('validation.attributes.parallel')</div>
                <div class="col-md-8">
                    <x-input name="parallel" :placeholder="'Masukkan '.__('validation.attributes.parallel')" :value="$grade->parallel"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4 label text-capitalize">@lang('validation.attributes.form_teacher_id')</div>
                <div class="col-md-8">
                    <x-select name="form_teacher_id" :placeholder="'Masukkan '.__('validation.attributes.form_teacher_id')" :value="$grade->form_teacher_id" :options="$teachers"></x-select>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group d-flex justify-content-end pt-3 mb-0">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</x-form>
