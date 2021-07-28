<div id="newData">

    <form action="{{url('admin/bulk/delete')}}" method="post" id="bulkDelete">
        @csrf
        <div class="bulk_option">
            <strong>Bulk Option</strong>
            <input type="text" name="model" value="{{$model}}" hidden>
            <select name="with_selected" data-model="{{$model}}" id="check_for_delete">
                <option value="">With Selected</option>
                <option value="delete">Delete</option>
            </select>
            <input type="submit" value="Submit">
            @if ($errors->has('checked_slug'))
            <span class="help-block">
                <strong style="color:red">{{ $errors->first('checked_slug') }}</strong>
            </span>
            @endif

        </div>
        <table class="table table-hover table-bordered">
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
                @forelse($datas as $data)
                <tr class="bordered">
                    <td>
                        <input type="checkbox" name="checked_slug[]" value="{{$data->slug}}" class="selectall">
                    </td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-sm btn-primary m-1" href="{{url('admin/'.$model.'/'.$data->slug.'/edit')}}"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-sm btn-danger m-1" href="{{url('admin/'.$model.'/'.$data->slug)}}" class="delete"><i class="far fa-trash-alt"></i></a>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-sm btn-success m-1" href="{{url('admin/'.$model.'/'.$data->slug)}}"><i class="far fa-eye"></i></a>
                        </div>
                        @if($model=='category'){{$data->products->count()}}@endif
                    </td>
                    @foreach($columns as $column)
                    @if($column=='thumbnail' or $column=='thumbnail1' or $column=='thumbnail2' or$column=='thumbnail3' or $column=='thumbnail4')
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
                @empty
                @endforelse
            </tbody>
        </table>
        @php
        $previous=$datas->currentPage()-1;
        $numbersPerSection=7;
        $section=ceil($datas->currentPage()/$numbersPerSection);
        $sections=ceil($datas->lastPage()/$numbersPerSection);
        $next=$datas->currentPage()+1;
        $pageStart=($section-1) * $numbersPerSection + 1;
        $pageEnd=($section-1) * $numbersPerSection + $numbersPerSection;
        if ($section == $sections) {
        $pageEnd= $datas->lastPage();
        }
        $backword=$datas->currentPage()-$numbersPerSection;
        $forword=$datas->currentPage()+$numbersPerSection;
        @endphp
        <nav aria-label="..." class="pagintion_nav {{$datas->lastPage()==1?'pagination_display':''}}">

            <ul class="pagination">
                <li class="page-item paginate_reload_prevent {{$datas->currentPage()=='1'?'disabled':''}}">
                    <a class="page-link" data-id="{{$datas->currentPage()-1}}" href="{{URL::to('/admin/'.$model.'?page='.$previous)}}">Previous</a>
                </li>
                @if($section > 1)
                <li class="page-item paginate_reload_prevent">
                    <a class="page-link" data-id="1" href="{{URL::to('/admin/'.$model.'?page=1')}}">1</a>
                </li>
                <li class="page-item paginate_reload_prevent">
                    <a class="page-link" href="{{URL::to('/admin/'.$model.'?page='.$backword)}}">...</a>
                </li>
                @endif
                @for($i=$pageStart;$i<=$pageEnd;$i++) <li class="page-item paginate_reload_prevent {{ $datas->currentPage()==$i ? 'active' : '' }}">
                    <a class="page-link" data-id="{{$i}}" href="{{URL::to('/admin/'.$model.'?page='.$i)}}">{{$i}}</a>
                    </li>
                    @endfor
                    @if($section < $sections) <li class="page-item paginate_reload_prevent">
                        <a class="page-link" href="{{URL::to('/admin/'.$model.'?page='.$forword)}}">...</a>
                        </li>
                        <li class="page-item paginate_reload_prevent">
                            <a class="page-link" data-id="{{$datas->currentPage()+1}}" href="{{URL::to('/admin/'.$model.'?page='.$datas->lastPage())}}">{{$datas->lastPage()}}</a>
                        </li>
                        @endif
                        <li class="page-item paginate_reload_prevent {{$datas->currentPage()==$datas->lastPage()?'disabled':''}}">
                            <a class="page-link" data-id="{{$datas->currentPage()+1}}" href="{{URL::to('/admin/'.$model.'?page='.$next)}}">Next</a>
                        </li>
            </ul>
        </nav>
        <br><br>
    </form>
</div>