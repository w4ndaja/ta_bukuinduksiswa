<div class="custom-control custom-checkbox">
    <input type="checkbox" name="{{$name}}" class="custom-control-input" id="checkbox-{{$randID}}" @if($old ?? $checked) checked @endif>
    <label class="custom-control-label @error($name) text-danger @enderror" for="checkbox-{{$randID}}">{{$label}}</label>
</div>
@error($name) <span class="text-danger">{{$message}}</span> @enderror
