<div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12">
    <label for="short_description" class="control-label">Short Description</label>
    <textarea type="text" class="form-control my-editor" name="short_description" id="short_description" placeholder="Short Description" cols="30" rows="15">
            @if(old('short_description'))
            {{ old('short_description')}}
            @else
            {{$data?$data->short_description:''}}
            @endif
            </textarea>
    @if ($errors->has('short_description'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('short_description') }}</strong>
    </span>
    @endif
</div>
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