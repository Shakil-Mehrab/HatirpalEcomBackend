<div class="form-group{{ $errors->has('video') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 12;">
    <label for="video" class="control-label">video</label>
    <input type="file" class="form-control" name="video" id="video">
    @if ($errors->has('video'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('video') }}</strong>
    </span>
    @endif
    {{-- <video src="{{asset($data?$data->video:'https://ui-avatars.com/api/?name=Hatirpal')}}" class="mt-2"> --}}
    <video width="400" controls>
        <source src="{{asset($data?$data->video:'https://ui-avatars.com/api/?name=Hatirpal')}}" type="video/mp4">

    </video>

</div>
