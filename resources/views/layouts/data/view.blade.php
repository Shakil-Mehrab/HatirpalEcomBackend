@extends('layouts.app')
@section('content')
<div class="mt-4">
    <div class="col-md-12 add_button mb-2">
        <a href="{{url('admin/'.$model.'/create')}}" class="btn btn-success btn-sm">
            <h5>Add {{ucfirst($model)}}</h5>
        </a>
        <a href="{{url('admin/'.$model.'/create')}}"><i class="far fa-plus-square"></i></a>
    </div>
    <div class="row search_head mb-2">

        <div class="col-md-4">
            <h6 class="total_data_rows">{{ucfirst($model)}} Table ({{$datas->total()}})</h6>
        </div>
        <div class="search col-md-8" id="dataTable">
            <span>Per Page</span>
            <select name="per-page" data-model="{{$model}}" data-total="{{$datas->total()}}" id="per_page">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
            <input type="search" name="search" id="search" placeholder="Search Here.....">
            {{-- data-model="{{$model}}" --}}
        </div>
    </div>
    @include('layouts.data.table')
</div>
@endsection
@section('js')
<script>
    $("#search").keyup(function() {
        var value = this.value.toLowerCase().trim();
        $("table tr").each(function(index) {
            if (!index) return;
            $(this).find("td").each(function() {
                var id = $(this).text().toLowerCase().trim();
                var not_found = (id.indexOf(value) == -1);
                $(this).closest('tr').toggle(!not_found);
                return not_found;
            });
        });
    });

</script>


@endsection
