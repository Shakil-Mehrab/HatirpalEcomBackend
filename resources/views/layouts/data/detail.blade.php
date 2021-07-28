@extends('layouts.app')
@section('content')
<div class="detail mt-2">
    <ul>
        <li>
            <a class="btn btn-sm btn-primary" href="{{url('admin/'.$model.'/'.$data->slug.'/edit')}}"><i class="fas fa-pencil-alt"></i></a>
            <a class="btn btn-sm btn-danger" href="{{url('admin/'.$model.'/'.$data->slug)}}" class="delete"><i class="far fa-trash-alt"></i></a>
            <a class="btn btn-sm btn-success" href="{{url('admin/'.$model.'/'.$data->slug)}}"><i class="far fa-eye"></i></a>
        </li>
        @foreach($columns as $column)
        @if($column=='thumbnail' or $column=='thumbnail1' or $column=='thumbnail2' or$column=='thumbnail3' or $column=='thumbnail4')
        <li class="image">
            <img src="{{asset($data->$column)}}" alt="No image" width="200px">
            @if($model=='product')({{$data->productImages->count()}})@endif
        </li>
        @elseif($column=='user_id')
        <li><strong>User Name :</strong> {{$data->user?$data->user->name:"$data->user_id not found"}}</li>
        @elseif($column=='address_id')
        <li><strong>Address : </strong> {{$data->address?$data->address->address.','.$data->address->delivery_place:"$data->address_id not found"}}</li>
        @elseif($column=='status')
        <li>
            <strong>Status : </strong>
            <a href="{{url('admin/status/'.$model,$data->slug)}}" class="status">
                <input type="checkbox" id="toggle-demo" class="ArtStatus btn btn-success btn-sm" rel="1" data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger" @if($data->status === 'published' or $data->status == 1)
                checked
                @endif
                >
            </a>
        </li>
        @else
        <li><strong>{{ucfirst(str_replace('_',' ',$column))}} : </strong> {{$data->$column}}</li>
        @endif
        @endforeach

        @if($model=='product')
        <li>
            @forelse($data->categories as $category)
            {{$category->name}} ,<br>
            @empty
            No Category
            @endforelse
        </li>
        <li>
            @forelse($data->sizes as $size)
            {{$size->size}} ,
            @empty
            No Size
            @endforelse
        </li>
        @endif
    </ul>
</div>
@endsection