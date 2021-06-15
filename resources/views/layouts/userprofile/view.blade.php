@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-4" >
        <div class="my-3 p-2" style="background-color: #f1f1f1;">
        <img src="/images/default/user.png" alt="#" width="100%">
        <div class="profile_detail">
            <ul>
                <li><h6><strong>Country</strong> : Bangladesh</h6></li>
                <li><h6><strong>Name</strong> : {{auth()->user()->name}}</h6></li>
                <li><strong>Email</strong> : kuyashaafrim18@gmail.com</li>
                <li><strong>Account Type</strong>  : User</li>
            </ul>
        </div>
        </div>
    </div>

    <div class="col-md-8">
        fytuyryu
    </div>
</div>
@endsection