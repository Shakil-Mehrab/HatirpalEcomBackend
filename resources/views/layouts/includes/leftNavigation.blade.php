<div class="media_body">
    <div class="active-user py-2">
        <div class="user-thumbnail mr-1">
            <img src="{{file_exists(auth()->user()->thumbnail)?asset(auth()->user()->thumbnail):'https://ui-avatars.com/api/?name=Hatirpal'}}" alt="user">
        </div>
        <div class="user-name mx-2"><a href="#">Rakibul Islam</a></div>
    </div>
    <ul class="root">
        <li>
            <a class="change_color_to_dark_white" href="{{url('/home')}}">
                <i class="fa fa-tachometer"></i> Dashboard
            </a>
        </li>

        @if(auth()->user()->status=='admin')
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Product
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/product/create')}}">Add Product</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/product')}}">View Product</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Video
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/video/create')}}">Add Video</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/video')}}">View Video</a></li>

            </ul>
        </li>

        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Category
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/category/create')}}">Add Category</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/category')}}">View Category</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                User
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/user')}}">View User</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Region
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/region/create')}}">Add Region</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/region')}}">View Region</a></li>
            </ul>
        </li>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Contact Us
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/contact/create')}}">Add Contact</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/contact')}}">View Contact</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Product Image
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/productimage')}}">View Product Image</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Address
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/address/create')}}">Add Address</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/address')}}">View Address</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Order
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/order/create')}}">Add Order</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/order')}}">View Order</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Shipping Method
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/shippingmethod/create')}}">Add Shipping Method</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/shippingmethod')}}">View Shipping Method</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Slider
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/slider/create')}}">Add Slider</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/slider')}}">View Slider</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Supplier
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/supplier/create')}}">Add Supplier</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/supplier')}}">View Supplier</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                Conditions
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/condition/create')}}">Add Conditions</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/condition')}}">View Conditions</a></li>
            </ul>
        </li>
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;">
                About Us
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_li_ul">
                <li><a class="change_color_to_dark_white" href="{{url('admin/about/create')}}">Add About As</a></li>
                <li><a class="change_color_to_dark_white" href="{{url('admin/about')}}">View About As</a></li>
            </ul>
        </li>
        @endif
        @if(auth()->user()->status=='user' && empty(auth()->user()->supplier))
        <li clas>
            <a class="change_color_to_dark_white" href="{{url('admin/supplier/create')}}">
                <i class="fa fa-truck"></i> Register As A Supplier
            </a>
        </li>
        @endif
        <li>
            <a class="change_color_to_dark_white" href="{{url('admin/userprofile')}}">
                <i class="fas fa-cog"></i>Setting
            </a>
        </li>
        {{-- <li>
            <a href=" #">
                <div class="fb-messengermessageus" messenger_app_id="451585265723432" page_id="105488687708483" color="blue" size="standard">
                </div>
            </a>
        </li> --}}
        <li>

            <a class="change_color_to_dark_white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>
