<div class="form-group {{ $errors->has('parent_id') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12" style="order:3">
    <label for="parent_id" class="control-label">Parent</label>
    <select class="form-control" name="parent_id" id="parent_id">
        <option></option>
        <option value="">None</option>
        @forelse($regions as $region)
        <option value="{{$region->id}}" {{$data?$data->parent_id==$region->id?'selected':'':''}}>{{$region->name}}</option>
        @empty
        <option value="">No region</option>
        @endforelse
    </select>
</div>