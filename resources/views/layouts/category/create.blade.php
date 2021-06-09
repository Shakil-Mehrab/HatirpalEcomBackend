@extends('layouts.app')
@section('content')

<div class="mt-2">
    <div class="edit_model_heading">
        <h5 class="text-center">Create Category</h5>
    </div>
    <form action="{{url('admin/store/category')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Category Name" value="{{Request::old('name')}}">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="slug" class="control-label">Slug</label>
                <input type="text" class="form-control slug_disabled" name="slug" id="slug" placeholder="Slug wil be created from name" value="Slug wil be created from name">
                @if ($errors->has('slug'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('slug') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="price" class="control-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Category Price" value="{{Request::old('price')}}">
                @if ($errors->has('price'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('icon') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="icon" class="control-label">Icon</label>
                <input type="text" class="form-control" name="icon" id="icon" placeholder="Category Icon" value="{{Request::old('icon')}}">
                @if ($errors->has('icon'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('icon') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('parent_id') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="parent_id" class="control-label">Parent</label>
                <select class="form-control" name="parent_id" id="parent_id">
                    <option value="">Select One</option>
                    <option value="0">None</option>
                    @forelse($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @empty
                    <option value="">No Category</option>
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