@extends('layouts.app')
@section('content')
<div class="mt-2">
  <div class="edit_model-heading">
        <h5 class="text-center">Add Your Contact</h5>      
  </div>
  <form action="{{url('admin/update/contact/'.$data->slug)}}" method="post" encetype="maltipart/form-data">
   @csrf 
     <div class="row">
     <div class="form_group {{ $errors->has('name') ? 'has erros' : ''}} col-lg-6 col-md-6 col-sm-12">
        <label for="name" class="control-lable">Name</label>
        <input type="text"  class="form-control" name="name" id="name" placeholder="contact name" value="{{$data->name}}">
        @if ($errors->has('name'))
        <span class="help-block">
           <strong class="color:red">{{ $errors->first('name')}}</strong>
        </span>
        @endif
     </div>
     <div class="form_group {{ $errors->has('slug') ? 'has erros' : ''}} col-lg-6 col-md-6 col-sm-12">
        <label for="slug" class="control-lable">Slug</label>
        <input type="text" class="form-control" name="slug" id="slug" placeholder="contact slug" value="{{$data->slug}}">
        @if ($errors->has('slug'))
        <span class="help-block">
           <strong class="color:red">{{ $errors->first('slug')}}</strong>
        </span>
        @endif
     </div>
      <div class="form_group {{ $errors->has('price') ? 'has erros' : ''}} col-lg-6 col-md-6 col-sm-12">
        <label for="price" class="control-lable">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="price" value="{{$data->price}}">
        @if ($errors->has('price'))
        <span class="help-block">
           <strong class="color:red">{{ $errors->first('price')}}</strong>
        </span>
        @endif
     </div>
     <input type="submit" class="form-control btn btn-success">
    </div>
  </form>
</div>
@endsection