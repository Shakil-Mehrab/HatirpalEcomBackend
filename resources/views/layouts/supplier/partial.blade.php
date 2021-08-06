<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 mb-5">
    <label for="description" class="control-label">Description</label>
    <textarea type="text" class="form-control my-editor" name="description" id="description" placeholder="Description" cols="30" rows="15">
        @if(old('description'))
        {{ old('description')}}
        @else
        {{$data?$data->description:''}}
        @endif
        </textarea>
    @if ($errors->has('description'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('description') }}</strong>
    </span>
    @endif
</div>
<div class="form-group{{ $errors->has('thumbnail1') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 12;">
    <label for="thumbnail1" class="control-label">Company Document 1</label>
    <input type="file" class="form-control" name="thumbnail1" id="thumbnail1">
    @if ($errors->has('thumbnail1'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('thumbnail1') }}</strong>
    </span>
    @endif
    <img src="{{asset($data?$data->thumbnail1:'https://ui-avatars.com/api/?name=Hatirpal')}}" alt="{{asset($data?$data->name:'')}}" width="50px" class="mt-2">
</div>
<div class="form-group{{ $errors->has('thumbnail2') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 12;">
    <label for="thumbnail2" class="control-label">Company Document 2</label>
    <input type="file" class="form-control" name="thumbnail2" id="thumbnail2">
    @if ($errors->has('thumbnail2'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('thumbnail2') }}</strong>
    </span>
    @endif
    <img src="{{asset($data?$data->thumbnail2:'https://ui-avatars.com/api/?name=Hatirpal')}}" alt="{{asset($data?$data->name:'')}}" width="50px" class="mt-2">
</div>
<div class="form-group{{ $errors->has('thumbnail3') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 12;">
    <label for="thumbnail3" class="control-label">Company Document 3</label>
    <input type="file" class="form-control" name="thumbnail3" id="thumbnail3">
    @if ($errors->has('thumbnail3'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('thumbnail3') }}</strong>
    </span>
    @endif
    <img src="{{asset($data?$data->thumbnail3:'https://ui-avatars.com/api/?name=Hatirpal')}}" alt="{{asset($data?$data->name:'')}}" width="50px" class="mt-2">
</div>
<div class="form-group{{ $errors->has('thumbnail4') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 12;">
    <label for="thumbnail4" class="control-label">Company Document 4</label>
    <input type="file" class="form-control" name="thumbnail4" id="thumbnail4">
    @if ($errors->has('thumbnail4'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('thumbnail4') }}</strong>
    </span>
    @endif
    <img src="{{asset($data?$data->thumbnail4:'https://ui-avatars.com/api/?name=Hatirpal')}}" alt="{{asset($data?$data->name:'')}}" width="50px" class="mt-2">
</div>
