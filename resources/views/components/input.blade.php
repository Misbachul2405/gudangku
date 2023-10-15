<div>
    <label for="form-label">{{$title}}</label>
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" 
      name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}">
    @error ($name)
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
</div>