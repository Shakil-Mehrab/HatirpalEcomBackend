@extends('layouts.app')
@section('content')
<div class="my-2">
    <div class="row">

        <div class="col-md-12 navigation mb-4">
            <div class="heading">
                Admin Dashboard
            </div>
            <div class="direction">
                <span>Login / <i class="fa fa-tachometer"></i>Admin Dashboard</span>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="row post">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header d-flex justify-content-between">

                            <span>Total User</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">
                            <span>User</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>Supplier</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>Admin</span>
                            <span>{{$users->count()}}</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">

                        <div class="card-header d-flex justify-content-between">

                            <span>Total Product</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">
                            <span>Pending</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>Published</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>Reject</span>
                            <span>{{$users->count()}}</span>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-3">

                        <div class="card-header d-flex justify-content-between">

                            <span>Total Supplier</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">
                            <span>Pending</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>Approved</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>Reject</span>
                            <span>{{$users->count()}}</span>
                        </div>


                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="visitors_graph">
                        <div id="myPlot" style="width:100%;max-width:700px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="row order">


                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">

                        <div class="card-header d-flex justify-content-between">

                            <span>Total Pending Order</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">
                            <span>Today</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>This Week</span>
                            <span>{{$users->count()}}</span>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3">

                        <div class="card-header d-flex justify-content-between">

                            <span>Total Confirmed Order</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">
                            <span>Today</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>This Week</span>
                            <span>{{$users->count()}}</span>
                        </div>


                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">

                        <div class="card-header d-flex justify-content-between">

                            <span>Total Processing Order</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">
                            <span>Today</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>This Week</span>
                            <span>{{$users->count()}}</span>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3">

                        <div class="card-header d-flex justify-content-between">

                            <span>Total Picked Order</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">
                            <span>Today</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>This Week</span>
                            <span>{{$users->count()}}</span>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">

                        <div class="card-header d-flex justify-content-between">

                            <span>Total Shipped Order</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">
                            <span>Today</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>This Week</span>
                            <span>{{$users->count()}}</span>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">

                        <div class="card-header d-flex justify-content-between">

                            <span>Total Completed Order</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">
                            <span>Today</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>This Week</span>
                            <span>{{$users->count()}}</span>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-3">

                        <div class="card-header d-flex justify-content-between">

                            <span>Total Pending Order</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">
                            <span>Today</span>
                            <span>{{$users->count()}}</span>
                        </div>
                        <div class="card-body py-1 d-flex justify-content-between">

                            <span>This Week</span>
                            <span>{{$users->count()}}</span>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-12  mb-2">
                    <div class="add_button">

                        <a href="{{ url('admin/product/create') }}" class="btn btn-success btn-sm">
                            <h5>Add Product</h5>
                        </a>
                        <a href="{{ url('admin/product/create') }}"><i class="far fa-plus-square"></i></a>

                    </div>
                </div>

                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Views</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>
                                    {{ $product->name }}
                                </td>
                                <td>
                                    {{ $product->sale_price }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-success">
                                        {{ $product->status }}
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div><a href=""><button type="button" class="btn btn-sm btn-success">Show All Post</button></a></div>
                </div>
            </div>
        </div>

        <div class="col-12 my-4">
            @if ($data->status == 'pending')
            <div class="scroll_div">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>Company Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Company Type</th>
                            <th>Status</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $data->country }}</td>
                            <td>{{ $data->company_name }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->company_type }}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-warning">{{ $data->status }}</button>
                            </td>
                            <td>{{ $data->address }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-4 mt-4">
                    <img src="{{ file_exists($data->thumbnail) ? asset($data->thumbnail) : 'https://ui-avatars.com/api/?name=Hatirpal' }}" alt="Empty Document" width="100%">
                </div>
                <div class="col-4 mt-4">
                    <img src="{{ file_exists($data->thumbnail1) ? asset($data->thumbnail1) : 'https://ui-avatars.com/api/?name=Hatirpal' }}" alt="Empty Document" width="100%">
                </div>
                <div class="col-4 mt-4">
                    <img src="{{ file_exists($data->thumbnail2) ? asset($data->thumbnail2) : 'https://ui-avatars.com/api/?name=Hatirpal' }}" alt="Empty Document" width="100%">
                </div>
                <div class="col-4 mt-4">
                    <img src="{{ file_exists($data->thumbnail3) ? asset($data->thumbnail3) : 'https://ui-avatars.com/api/?name=Hatirpal' }}" alt="Empty Document" width="100%">
                </div>
                <div class="col-4 mt-4">
                    <img src="{{ file_exists($data->thumbnail4) ? asset($data->thumbnail4) : 'https://ui-avatars.com/api/?name=Hatirpal' }}" alt="Empty Document" width="100%">
                </div>
            </div>

            @endif
        </div>



    </div>
</div>

@endsection
@section('js')
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
    var xArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28
        , 29, 30
    ];
    var yArray = [100, 2000, 8, 500, 7000, 8000, 10000, 11, 500, 14, 15, 100, 2000, 8, 500, 60, 70, 500, 11, 500, 14
        , 15
    , ];

    // Define Data
    var data = [{
        x: xArray
        , y: yArray
        , mode: "lines"
    }];

    // Define Layout
    var layout = {
        xaxis: {
            range: [1, 30]
            , title: "Date"
        }
        , yaxis: {
            range: [0, 10000]
            , title: "Visitors"
        }
        , title: "Visitors Graph"
    };

    // Display using Plotly
    Plotly.newPlot("myPlot", data, layout);

</script>
@endsection
