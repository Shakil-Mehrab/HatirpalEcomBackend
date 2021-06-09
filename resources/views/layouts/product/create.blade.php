@extends('layouts.app')
@section('content')

<div class="mt-2">
    <div class="edit_model_heading">
        <h5 class="text-center">Create Product</h5>
    </div>
    <form action="{{url('admin/store/product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Product Name" value="{{Request::old('name')}}">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="slug" class="control-label">Slug</label>
                <input type="text" class="form-control slug_disabled" name="slug" id="slug" placeholder="Slug wil be created from name" value="Slug wil be created from name" >
                @if ($errors->has('slug'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('slug') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="price" class="control-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Product Price" value="{{Request::old('price')}}">
                @if ($errors->has('price'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('brand') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="brand" class="control-label">Brand</label>
                <input type="text" class="form-control" name="brand" id="brand" placeholder="Product Brand" value="{{Request::old('brand')}}">
                @if ($errors->has('brand'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('brand') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('size_id') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12">
                <label for="size_id" class="control-label">Select Size</label>
                <div>
                    @forelse($sizes as $size)
                    <input type="checkbox" class="form-checkbox" name="size_id[]" id="size_id" value="{{$size->id}}">
                    <span>{{$size->size}}</span>
                    @empty
                    @endforelse
                </div>
                @if ($errors->has('size_id'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('size_id') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12">
                <label for="category_id" class="control-label">Select Category</label>
                <div>
                    @forelse($categories as $category)
                    <input type="checkbox" class="form-checkbox" name="category_id[]" id="category_id" value="{{$category->id}}" {{$category->id==Request::old('category_id')?'checked':''}}>
                    <span>{{$category->name}}</span>
                    @empty
                    @endforelse
                </div>
                @if ($errors->has('category_id'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('category_id') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('short_description') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12">
                <label for="short_description" class="control-label">Short Description</label>
                <textarea type="text" class="form-control" name="short_description" id="short_description" placeholder="Short Description" cols="30" rows="6">{{Request::old('short_description')}}</textarea>
                @if ($errors->has('short_description'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('short_description') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12">
                <label for="description" class="control-label">Description</label>
                <textarea type="text" class="form-control" name="description" id="description" placeholder="Description" cols="30" rows="6">{{Request::old('description')}}</textarea>
                @if ($errors->has('description'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="image" class="control-label">Tumbnail</label>
                <input type="file" class="form-control" name="image" id="image">
                @if ($errors->has('image'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('image') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('images') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                <label for="images" class="control-label">Related Images</label>
                <input type="file" class="form-control" name="images[]" id="images" multiple>
                @if ($errors->has('images'))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first('images') }}</strong>
                </span>
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                <input type="submit" class="form-control btn btn-success" value="Submit">
            </div>

        </div>
    </form>

</div>
@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });

    </script>
@endsection