<div class="form-group{{ $errors->has('thumbnail') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 12;">
    <label for="thumbnail" class="control-label">Thumbnail</label>
    <input type="file" class="form-control" name="thumbnail" id="thumbnail">
    @if ($errors->has('thumbnail'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('thumbnail') }}</strong>
    </span>
    @endif
    <img src="{{asset($data?$data->thumbnail:'https://ui-avatars.com/api/?name=Hatirpal')}}" alt="" width="50px" class="mt-2">
</div>
