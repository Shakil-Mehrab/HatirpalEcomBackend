<div class="scroll_div" id="newData">

    <form action="{{ url('admin/bulk/delete') }}" method="post" id="bulkDelete">
        @csrf
        <div class="bulk_option">
            <strong>Bulk Option</strong>
            <input type="text" name="model" value="{{ $model }}" hidden>
            <select name="with_selected" data-model="{{ $model }}" id="check_for_delete">
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
                    @foreach ($columns as $column)
                        <th>{{ ucfirst(str_replace('_', ' ', $column)) }}</th>
                    @endforeach

                    @if ($model == 'product')
                        <th>Category</th>
                        <th>Size</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @forelse($datas as $data)
                    <tr class="bordered">
                        <td>
                            <input type="checkbox" name="checked_slug[]" value="{{ $data->slug }}" class="selectall">
                        </td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-sm btn-primary m-1"
                                    href="{{ url('admin/' . $model . '/' . $data->slug . '/edit') }}"><i
                                        class="fas fa-pencil-alt"></i></a>
                                <a href="{{ url('admin/delete/' . $data->slug) }}" data-model="{{ $model }}"
                                    class="btn btn-sm btn-danger m-1 delete"><i class="far fa-trash-alt"></i></a>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-sm btn-success m-1"
                                    href="{{ url('admin/' . $model . '/' . $data->slug) }}"><i
                                        class="far fa-eye"></i></a>
                            </div>
                            @if ($model == 'category'){{ $data->products->count() }}@endif
                        </td>
                        @foreach ($columns as $column)
                            @if ($column == 'thumbnail' or $column == 'thumbnail1' or $column == 'thumbnail2' or $column == 'thumbnail3' or $column == 'thumbnail4')
                                <td>
                                    <img src="{{ file_exists($data->$column) ? asset($data->$column) : 'https://ui-avatars.com/api/?name=Hatirpal' }}"
                                        alt="No image" width="50px">
                                    @if ($model == 'product')({{ $data->productImages->count() }})@endif
                                </td>
                            @elseif($column=='video')
                                <td>
                                    <video width="200" height="100" controls>
                                        <source
                                            src="{{ file_exists($data->$column) ? asset($data->$column) : 'https://ui-avatars.com/api/?name=Hatirpal' }}"
                                            type="video/mp4">
                                    </video>
                                </td>
                            @elseif($column=='user_id')
                                <td>{{ $data->user ? $data->user->name : "$data->user_id not found" }}</td>
                            @elseif($column=='address_id')
                                <td>{{ $data->address ? $data->address->address . ',' . $data->address->delivery_place : "$data->address_id not found" }}
                                </td>
                            @elseif($column=='status' or $column=='role')
                                <td>
                                    <?php
                                    $modelPath = 'App\Models\\' . ucfirst($model);
                                    $sts = $modelPath::statusArray();

                                    ?>
                                    <select class="status" name="status" id="status"
                                        data-link="{{ url('admin/status/' . $data->slug . '?model=' . $model) }}">
                                        <option value="">Select One</option>
                                        @forelse($sts as $st)
                                            <option value="{{ $st[0] }}"
                                                {{ $data->$column == $st[0] ? 'selected' : '' }}>
                                                {{ ucfirst($st[0]) }}
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>
                                </td>
                            @else
                                <td>{{ $data->$column }}</td>
                            @endif
                        @endforeach

                        @if ($model == 'product')
                            <td>
                                @forelse($data->categories as $category)
                                    {{ $category->name }} ,<br>
                                @empty
                                    No Category
                                @endforelse
                            </td>
                            <td>
                                @forelse($data->sizes as $size)
                                    {{ $size->size }} ,
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
        @include('layouts.data.pagination')
    </form>
</div>
