@extends('layouts.app')
@section('content')
<div class="mt-2">
    <div class="searcr_head mb-2">
        <h6 class="total_data_rows">{{ucfirst($model)}} Tabil {{$datas->count()}}</h6>
        <div class="search" id="dataTable">
            <span>Per Page</span>
            <select name="per-page" data-modle="{{$model}}" id="per_page">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">uuid</th>                
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">sluge</th>
                <th scope="col">order</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">action</th>

            </tr>
        </thead>
        <tbody>
         @forelse($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->uuid}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->sluge}}</td>
                <td>{{$data->order}}</td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->updated_at}}</td>
                <td><a href="{{URL::to('/admin/edit/contact/'.$data->slug)}}">edit</a></td>

            </tr> 
            @empty
            @endforelse  
        </tbody>
    </table>
</div>
@endsection