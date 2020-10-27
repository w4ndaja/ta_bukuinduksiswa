<x-form :action="$action" :method="$method">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.code')</label></div>
                <div class="col-md-8">
                    <x-input name="code" :placeholder="'Masukkan '.__('validation.attributes.code')" :value="$subject->code"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.name')</label></div>
                <div class="col-md-8">
                    <x-input name="name" :placeholder="'Masukkan '.__('validation.attributes.name')" :value="$subject->name"></x-input>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4"><label class="text-capitalize">@lang('validation.attributes.type')</label></div>
                <div class="col-md-8">
                    <x-input name="type" :placeholder="'Masukkan '.__('validation.attributes.type')" :value="$subject->type"></x-input>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group d-flex justify-content-end pt-3 mb-0">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</x-form>
