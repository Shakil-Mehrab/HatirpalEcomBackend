@extends('layouts.app')
@section('content')

<div class="mt-2">
    <div class="edit_model_heading">
        <h5 class="text-center">Create Region</h5>
    </div>
    <form action="{{url('admin/store/region')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Region Name" value="{{Request::old('name')}}">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>           
            <div class="form-group {{ $errors->has('parent_id') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="parent_id" class="control-label">Parent</label>
                <select class="form-control" name="parent_id" id="parent_id">
                    <option value="">Select One</option>
                    <option value="0">None</option>
                    @forelse($regions as $region)
                    <option value="{{$region->id}}">{{$region->name}}</option>
                    @empty
                    <option value="">No region</option>
                    @endforelse
                </select>
            </div>      
            <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                <input type="submit" class="form-control btn btn-success" value="Submit">
            </div>

        </div>
    </form>

</div>
@endsection
