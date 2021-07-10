<!-- status  -->
<div class="form-group {{ $errors->has('status') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order:3">
    <label for="status" class="control-label">Order Status</label>
    <select class="form-control" name="status" id="parent_id">
        <option value="">Select One</option>
        <option value="pending" @if(old('status')) {{ old('status')=="pending"?'selected':''}} @else {{$data?$data->status=='pending'?'selected':'':''}} @endif>Pending</option>
        <option value="confirmed" @if(old('status')) {{ old('status')=="confirmed"?'selected':''}} @else {{$data?$data->status=='confirmed'?'selected':'':''}} @endif>Confirmed</option>
        <option value="processing" @if(old('status')) {{ old('status')=="processing"?'selected':''}} @else {{$data?$data->status=='processing'?'selected':'':''}} @endif>Processing</option>
        <option value="picked" @if(old('status')) {{ old('status')=="picked"?'selected':''}} @else {{$data?$data->status=='picked'?'selected':'':''}} @endif>Picked</option>
        <option value="shipped" @if(old('status')) {{ old('status')=="shipped"?'selected':''}} @else {{$data?$data->status=='shipped'?'selected':'':''}} @endif>Shipped</option>
        <option value="complete" @if(old('status')) {{ old('status')=="complete"?'selected':''}} @else {{$data?$data->status=='complete'?'selected':'':''}} @endif>Complete</option>
        <option value="failed" @if(old('status')) {{ old('status')=="failed"?'selected':''}} @else {{$data?$data->status=='failed'?'selected':'':''}} @endif>Failed</option>
    
    </select>
    @if ($errors->has('status'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('status') }}</strong>
    </span>
    @endif
</div>