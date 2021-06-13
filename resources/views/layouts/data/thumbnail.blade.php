<div class="form-group{{ $errors->has('thumbnail') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12 my-3" style="order: 12;">
    <label for="thumbnail" class="control-label">Thumbnail</label>
    <input type="file" class="form-control" name="thumbnail" id="thumbnail">
    @if ($errors->has('thumbnail'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('thumbnail') }}</strong>
    </span>
    @endif
    <img src="{{asset($data?$data->thumbnail:'')}}" alt="{{asset($data?$data->name:'')}}" width="50px">
</div>