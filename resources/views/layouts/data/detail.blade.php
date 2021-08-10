@extends('layouts.app')
@section('content')
<div class="detail mt-2">
    <ul>
        @if(auth()->user()->status=='admin')
        <li>
            <a class="btn btn-sm btn-primary" href="{{url('admin/'.$model.'/'.$data->slug.'/edit')}}"><i class="fas fa-pencil-alt"></i></a>
            <a class="btn btn-sm btn-danger" href="{{url('admin/'.$model.'/'.$data->slug)}}" class="delete"><i class="far fa-trash-alt"></i></a>
            <a class="btn btn-sm btn-success" href="{{url('admin/'.$model.'/'.$data->slug)}}"><i class="far fa-eye"></i></a>
        </li>
        @endif
        @foreach($columns as $column)
        @if($column=='thumbnail' or $column=='thumbnail1' or $column=='thumbnail2' or$column=='thumbnail3' or $column=='thumbnail4')
        <li class="image">
            <h4><strong>Thumabnail : </strong></h4>

            <img src="{{file_exists($data->$column)?asset($data->$column):'https://ui-avatars.com/api/?name=Hatirpal'}}" alt="No image" width="100px">

            <h4><strong>Related Images : </strong></h4>
            @forelse($data->productImages as $img)
            <img src="{{file_exists($img->thumbnail)?asset($img->thumbnail):'https://ui-avatars.com/api/?name=Hatirpal'}}" alt="No image" width="100px">
            @empty
            No Related Imagae
            @endforelse
            {{-- @if($model=='product')({{$data->productImages->count()}})@endif --}}
        </li>
        @elseif($column=='user_id')
        <li><strong>User Name :</strong> {{$data->user?$data->user->name:"$data->user_id not found"}}</li>
        @elseif($column=='address_id')
        <li><strong>Address : </strong> {{$data->address?$data->address->address.','.$data->address->delivery_place:"$data->address_id not found"}}</li>
        @elseif($column=='status')
        <li>
        <li><strong>Status :</strong> {{$data->status}}</li>

        </li>
        @else
        <li><strong>{{ucfirst(str_replace('_',' ',$column))}} : </strong> {{$data->$column}}</li>
        @endif
        @endforeach

        @if($model=='product')
        <li>
            <strong>Categories :</strong>

            @forelse($data->categories as $category)
            {{$category->name}} ,<br>
            @empty
            No Category
            @endforelse
        </li>
        <li>
            <strong>Sizes :</strong>
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
