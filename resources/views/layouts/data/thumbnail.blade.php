<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12 my-5" style="order: 12;">
    <label for="image" class="control-label">Thumbnail</label>
    <input type="file" class="form-control" name="image" id="image">
    @if ($errors->has('image'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('image') }}</strong>
    </span>
    @endif
    <img src="{{asset($data?$data->thumbnail:'')}}" alt="{{asset($data?$data->name:'')}}" width="50px">
</div>