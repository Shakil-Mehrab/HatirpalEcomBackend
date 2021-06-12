<div class="media_body">
    <div class="user_image">
        <div class="user_img mr-1">
            <img src="/images/default/user.jpeg" alt="user" width="60px">
        </div>
        <h6>Rakibul Islam</h6>
    </div>
    <ul class="tree_ul">
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;" onclick="product_show_hide()">
                Product
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_ul" style="display: none;" id="product_toggle">
                <li class="tree_li"><a class="change_color_to_dark_white" href="{{url('admin/create/product')}}">Add Product</a></li>
                <li class="tree_li"><a class="change_color_to_dark_white" href="{{url('admin/view/product')}}">View Product</a></li>
            </ul>
        </li>
    </ul>
    <ul class="tree_ul">
        <li class="tree_li">
            <a class="change_color_to_dark_white" href="#" style="position: relative;" onclick="category_show_hide()">
                Category
                <i class="fas fa-chevron-right"></i>
            </a>
            <ul class="tree_ul" style="display: none;" id="category_toggle">
                <li class="tree_li"><a class="change_color_to_dark_white" href="{{url('admin/create/category')}}">Add Category</a></li>
                <li class="tree_li"><a class="change_color_to_dark_white" href="{{url('admin/view/category')}}">View Category</a></li>
            </ul>
        </li>
    </ul>
</div>
















<div class="form-group {{ $errors->has('size_id') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 3;">
    <label for="size_id" class="control-label">Select Size</label>
    <div>
    <!-- {{ old('size_id.'.'4') }} -->
    <!-- $data?$data->sizes->contains($size->id)?'checked':'':'' -->
        @forelse($sizes as $index=>$size)
        <input type="checkbox" class="form-checkbox" name="size_id[]" id="size_id" value="{{$size->id}}" 
        @if(old('name'))
        {{ old('size_id.'.$size->id)?'checked':''}}
        @else
        @endif
        >
        <span>{{$size->size}}</span>
        @empty
        @endforelse
    </div>