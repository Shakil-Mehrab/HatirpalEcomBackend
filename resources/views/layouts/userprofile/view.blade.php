@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="my-3 p-2" style="background-color: #f1f1f1;border: 1px solid #e6e5e5;box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);">
            <img src="{{auth()->user()->thumbnail}}" alt="{{auth()->user()->name}}" width="100%">
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
    </div>
    <div class="col-md-8">
        <div class="my-3 p-2" style="background-color: #f1f1f1;border: 1px solid #e6e5e5;box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);">
            <img src="{{auth()->user()->thumbnail}}" alt="{{auth()->user()->name}}" width="100%" height="470px">
            <div class="text-center mt-2">
                <a href="{{url('admin/user/'.auth()->user()->slug.'/edit')}}">Edit Profile</a>
            </div>
            <!-- <div class="profile_detail mt-4">
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
            </div> -->
        </div>
    </div>

    <div class="col-md-12">
        <div class="row">
            <h3 class="text-center p-2">Selling Made Simple </h3>
            <h6 class="text-center mb-3">Become a seller today</h6>
            @forelse(collect([1,2,3,4]) as $col)
            <div class="col-md-3 mb-5">
                <div class="p-4 seller">
                    <h6 class="text-center mb-3">
                        <strong>DarazMall Seller</strong>
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
                    <div class="btn btn-success btn-sm mt-2">
                        Sign up as Hatirpal
                    </div>
                  
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
@endsection