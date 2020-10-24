<input type="{{$type ?? 'text'}}" class="form-control @error($name) border-danger @enderror" value="{{ $old ?? $value }}" name="{{$name}}" placeholder="{{$placeholder}}"  @if($autofocus) autofocus @endif>
@error($name) <div class="text-danger">{{ $message }}</div> @enderror
