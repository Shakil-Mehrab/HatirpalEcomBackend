<div class="form-group {{ $errors->has('division_id') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order:4">
    <label for="division_id" class="control-label">Division</label>
    <select class="form-control" name="division_id" id="division_id">
        <option></option>
        <option value="">None</option>
        @forelse($divisions as $category)
        <option value="{{$category->id}}" {{$data?$data->division_id==$category->id?'selected':'':''}}>{{$category->name}}</option>
        @empty
        <option value="">No Division</option>
        @endforelse
    </select>
    @if ($errors->has('division_id'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('division_id') }}</strong>
    </span>
    @endif
</div>
<div class="form-group {{ $errors->has('district_id') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order:4">
    <label for="district_id" class="control-label">District</label>
    <select class="form-control" name="district_id" id="district_id" disabled>

    </select>
    @if ($errors->has('district_id'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('district_id') }}</strong>
    </span>
    @endif
</div>
<div class="form-group {{ $errors->has('place_id') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order:4">
    <label for="place_id" class="control-label">Checkout Place</label>
    <select class="form-control" name="place_id" id="checking_place_id" disabled>

    </select>
    @if ($errors->has('place_id'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('place_id') }}</strong>
    </span>
    @endif
</div>