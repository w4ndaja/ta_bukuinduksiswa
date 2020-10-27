<select class="form-control @error($name) border-danger @enderror" name="{{$name}}"  @if($autofocus) autofocus @endif onchange="this.value == 'createdata' ? window.location.href='{{$createDataRoute ? route($createDataRoute) : ''}}' : ''">
    <option value="" selected disabled>{{$placeholder}}</option>
    @if(sizeof($options) < 1 && $createDataRoute)
        <option value="createdata">Tambah Data</option>
    @endif
    @foreach ($options as $option)
        <option value="{{$option->value ?? $option['value']}}" {{ ($old ?? $value) == ($option->value ?? $option['value']) ? 'selected' : '' }}>{{$option->label ?? $option['label']}}</option>
    @endforeach
</select>
@error($name) <div class="text-danger">{{ $message }}</div> @enderror
