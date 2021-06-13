@extends('layouts.app')
@section('content')
<div class="mt-2">
    <div class="edit_model_heading">
        <h5 class="text-center">Edit {{ucfirst($model)}}</h5>
    </div>
    <form action="{{url('admin/update/'.$model.'/'.$data->slug)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            @forelse($columns as $column)
            <div class="form-group{{ $errors->has($column) ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3">
                <label for="{{$column}}" class="control-label">{{ucfirst(str_replace('_',' ',$column))}}</label>
                <input type="text" class="form-control" name="{{$column}}" id="{{$column}}" placeholder="{{ucfirst(str_replace('_',' ',$column))}}" value="{{old($column)?old($column):$data->$column}}">
                @if ($errors->has($column))
                <span class="help-block">
                    <strong style="color:red">{{ $errors->first($column) }}</strong>
                </span>
                @endif
            </div>
            @empty
            @endforelse

            @if($model=='product')
            @include('layouts.data.thumbnail')
            @include('layouts.product.partial')
            @endif

            @if($model=='user')
            @include('layouts.data.thumbnail')
            @endif

            @if($model=='slider')
            @include('layouts.data.thumbnail')
            @endif
            
            @if($model=='category')
            @include('layouts.category.partial')
            @endif

            @if($model=='region')
            @include('layouts.region.partial')
            @endif
            <div class="col-lg-12 col-md-12 col-sm-12 mt-2 mb-5" style="order: 20;">
                <input type="submit" class="form-control btn btn-success" value="Update">
            </div>
        </div>
    </form>
</div>
@endsection
@section('js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea'
    });
    $("#parent_id").select2({
        // placeholder: "Select One",
        allowClear: true
    })
    $("#division_id").select2({
        placeholder: "Select One",
        allowClear: true
    })
    $("#district_id").select2({
        placeholder: "Select a Country",
        allowClear: true
    })
    $("#checking_place_id").select2({
        placeholder: "Select a District",
        allowClear: true
    })
</script>
@endsection