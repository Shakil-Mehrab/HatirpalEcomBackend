@extends('layouts.app')
@section('content')
<div class="mt-2">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    <input type="checkbox" id="selectallboxes">
                </th>
                <th>Action</th>
                @foreach($columns as $column)
                <th>{{ucfirst(str_replace('_',' ',$column))}}</th>
                @endforeach

                @if($model=='product')
                <th>Category</th>
                <th>Size</th>
                @endif



            </tr>
        </thead>
        <tbody>
            <tr class="bordered">
                <td>
                    <input type="checkbox" name="checked_slug[]" value="{{$data->slug}}" class="selectall">
                </td>
                <td>
                    <a href="{{url('admin/'.$model.'/'.$data->slug.'/edit')}}" style="color:blue"><i class="fas fa-pencil-alt"></i></a>
                    <a href="{{url('admin/'.$model.'/'.$data->slug)}}" class="delete" style="color:red"><i class="far fa-trash-alt"></i></a>
                    <a href="{{url('admin/'.$model.'/'.$data->slug)}}" style="color:green"><i class="far fa-eye"></i></a>

                    @if($model=='category'){{$data->products->count()}}@endif
                </td>
                @foreach($columns as $column)
                @if($column=='thumbnail')
                <td>
                    <img src="{{asset($data->$column)}}" alt="No image" width="50px">
                    @if($model=='product')({{$data->productImages->count()}})@endif
                </td>
                @elseif($column=='user_id')
                <td>{{$data->user?$data->user->name:"$data->user_id not found"}}</td>
                @elseif($column=='address_id')
                <td>{{$data->address?$data->address->address.','.$data->address->delivery_place:"$data->address_id not found"}}</td>
                @elseif($column=='status')
                <td>
                    <a href="{{url('admin/status/'.$model,$data->slug)}}" class="status">
                        <input type="checkbox" id="toggle-demo" class="ArtStatus btn btn-success btn-sm" rel="1" data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger" @if($data->status === 'published' or $data->status == 1)
                        checked
                        @endif
                        >
                        <!-- <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div> -->
                    </a>
                </td>
                @else
                <td>{{$data->$column}}</td>
                @endif
                @endforeach

                @if($model=='product')
                <td>
                    @forelse($data->categories as $category)
                    {{$category->name}} ,<br>
                    @empty
                    No Category
                    @endforelse
                </td>
                <td>
                    @forelse($data->sizes as $size)
                    {{$size->size}} ,
                    @empty
                    No Size
                    @endforelse
                </td>
                @endif


            </tr>
        </tbody>
    </table>
</div>
@endsection