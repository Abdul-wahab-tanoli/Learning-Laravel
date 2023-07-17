<div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="{{ $fontclass }}"></i> </span>
    </div>
    <input name="{{ $name }}" class="form-control" value="{{ $value }}" placeholder="{{ $placeholder }}"
        type="{{ $type }}">
</div> <!-- form-group// -->
<span class="text-danger">
    @error($name)
        {{ $message }}
    @enderror
</span>
