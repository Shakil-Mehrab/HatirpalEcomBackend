@extends('layouts.app')
@section('content')
<div class="row my-4">
    <div class="col-sm-6 col-md-4">
        <div class="my-3 p-2" style="background-color: #f1f1f1;border: 1px solid #e6e5e5;box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);">
            <img src="{{file_exists(auth()->user()->thumbnail)?asset(auth()->user()->thumbnail):'https://ui-avatars.com/api/?name=Hatirpal'}}" alt="{{auth()->user()->name}}" width="100%">
            <div class="text-center mt-2">
                <a href="{{url('admin/userprofile/'.auth()->user()->slug.'/edit')}}">Edit Profile</a>
            </div>
            <div class="profile_detail mt-4">
                <ul>
                    <li class="mb-2">
                        <h6><strong>Country</strong> : Bangladesh</h6>
                    </li>
                    <li class="mb-2">
                        <h6><strong>Name</strong> : {{auth()->user()->name}}</h6>
                    </li>
                    <li class="mb-2"><strong>Email</strong> : kuyashaafrim18@gmail.com</li>
                    <li><strong>Account Type</strong> : User</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="col-sm-6 col-md-6">
        <div class="my-3 p-2" style="background-color: #f1f1f1;border: 1px solid #e6e5e5;box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);">
            <img src="{{auth()->user()->thumbnail}}" alt="{{auth()->user()->name}}" width="100%" height="470px">
            <div class="text-center mt-2">
                <a href="{{url('admin/user/'.auth()->user()->slug.'/edit')}}">Edit Profile</a>
            </div>
            <div class="profile_detail mt-4">
                <ul>
                    <li class="mb-2">
                        <h6><strong>Country</strong> : Bangladesh</h6>
                    </li>
                    <li class="mb-2">
                        <h6><strong>Name</strong> : {{auth()->user()->name}}</h6>
                    </li>
                    <li class="mb-2"><strong>Email</strong> : kuyashaafrim18@gmail.com</li>
                    <li><strong>Account Type</strong> : User</li>
                </ul>
            </div>
        </div>
    </div> -->
    <div class="col-sm-6 col-md-8">
        @if($supplier=@auth()->user()->supplier)
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
                        <td>{{$supplier->country}}</td>
                        <td>{{$supplier->company_name}}</td>
                        <td>{{$supplier->phone}}</td>
                        <td>{{$supplier->email}}</td>
                        <td>{{$supplier->company_type}}</td>
                        <td>
                            <button class="btn btn-sm btn-outline-warning">{{$supplier->status}}</button>
                        </td>
                        <td>{{$supplier->address}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
         <div class="row">
                    <div class="col-4 mt-4">
                        <img src="{{file_exists($supplier->thumbnail)?asset($supplier->thumbnail):'https://ui-avatars.com/api/?name=Hatirpal'}}" alt="Empty Document" width="100%">
                    </div>
                    <div class="col-4 mt-4">
                        <img src="{{file_exists($supplier->thumbnail1)?asset($supplier->thumbnail1):'https://ui-avatars.com/api/?name=Hatirpal'}}" alt="Empty Document" width="100%">
                    </div>
                    <div class="col-4 mt-4">
                        <img src="{{file_exists($supplier->thumbnail2)?asset($supplier->thumbnail2):'https://ui-avatars.com/api/?name=Hatirpal'}}" alt="Empty Document" width="100%">
                    </div>
                    <div class="col-4 mt-4">
                        <img src="{{file_exists($supplier->thumbnail3)?asset($supplier->thumbnail3):'https://ui-avatars.com/api/?name=Hatirpal'}}" alt="Empty Document" width="100%">
                    </div>
                    <div class="col-4 mt-4">
                        <img src="{{file_exists($supplier->thumbnail4)?asset($supplier->thumbnail4):'https://ui-avatars.com/api/?name=Hatirpal'}}" alt="Empty Document" width="100%">
                    </div>
                </div>
        @endif
    </div>

    <div class="col-md-12">
        <div class="row">
            <h3 class="text-center p-2">Selling Made Simple </h3>
            <h6 class="text-center mb-3">Become a seller today</h6>
            <div class="col-md-3 mb-5">
                <div class="p-4 seller">
                    <h6 class="text-center mb-3">
                        <strong>Hatirpal Seller</strong>
                    </h6>
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus dolorum quis facilis nobis dolore dolores sequi quaerat vero omnis?
                    </p>
                    <ul>
                        @forelse(collect([1,2,3,4,5]) as $ch)
                        <li class="mb-2">
                            <i class="fas fa-check"></i>
                            <a href="#">You are a brand row is here</a>
                        </li>
                        @empty
                        @endforelse
                    </ul>
                    <a href="{{url('admin/supplier/create')}}">
                        <button class="btn btn-success btn-sm mt-2 form-control">
                            Sign up as Hatirpal
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
