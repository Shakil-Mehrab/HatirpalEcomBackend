
<div style="order: 9;">
    <div class="form-control toggle_menu mb-2" onclick="toggleMenu('des')">
        <span><strong>Description</strong></span>
        <i class="fas fa-angle-down"></i>
    </div>
    <div class="toggle_div_des hidden">
        <div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 mt-5">
            <label for="short_description" class="control-label">Short Description</label>
            <textarea type="text" class="form-control" name="short_description" id="short_description" placeholder="Short Description" cols="30" rows="6">{{old('short_description')}}</textarea>
            @if ($errors->has('short_description'))
            <span class="help-block">
                <strong style="color:red">{{ $errors->first('short_description') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 mb-5">
            <label for="description" class="control-label">Description</label>
            <textarea type="text" class="form-control" name="description" id="description" placeholder="Description" cols="30" rows="6">{{old('description')}}</textarea>
            @if ($errors->has('description'))
            <span class="help-block">
                <strong style="color:red">{{ $errors->first('description') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('images') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 12;">
    <label for="images" class="control-label">Related Images</label>
    <input type="file" class="form-control" name="images[]" id="images" multiple>
    @if ($errors->has('images.*'))
    <span class="help-block">
        hi
        <strong style="color:red">{{ $errors->first('images.*') }}</strong>
    </span>
    @endif
</div>
@php
$stock='';
if(!empty($data->variations[0]->productStock->quantity)){
$stock=$data->variations[0]->productStock->quantity;
}
@endphp
<div class="form-group {{ $errors->has('stock') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 3;">
    <label for="stock" class="control-label">Stock</label>
    <input type="text" class="form-control" name="stock" id="stock" placeholder="Stock" value="{{old('stock')?old('stock'):$stock}}">
    @if ($errors->has('stock'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('stock') }}</strong>
    </span>
    @endif
</div>
<div class="form-group {{ $errors->has('size_id') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 3;">
    <label for="size_id" class="control-label">Select Size</label>
    <div>
        @forelse($sizes as $index=>$size)
        <input type="checkbox" class="form-checkbox" name="size_id[{{$size->id}}]" id="size_id" value="{{$size->id}}" @if(old('name')) {{ old('size_id.'.$size->id)?'checked':''}} @else {{$data?$data->sizes->contains($size->id)?'checked':'':''}} @endif>
        <span>{{$size->size}}</span>
        @empty
        @endforelse
    </div>
    @if ($errors->has('size_id'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('size_id') }}</strong>
    </span>
    @endif
</div>

<div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 my-5" style="order: 4;">
    <div class="form-control toggle_menu mb-2" onclick="toggleMenu('cat')">
        <span><strong>Select Category</strong></span>
        <i class="fas fa-angle-down"></i>
    </div>
    <div class="product_cat_div toggle_div_cat hidden">
        <input type="text" name="cat" value="cat" hidden>
        @forelse($categories as $category)
        <input type="checkbox" class="form-checkbox" name="category_id[{{$category->id}}]" id="category_id" value="{{$category->id}}" @if(old('cat')) {{ old('category_id.'.$category->id)?'checked':''}} @else {{$data?$data->categories->contains($category->id)?'checked':'':''}} @endif>
        <span>{{$category->name}}</span>
        <div class="cat_child_div">
            @forelse($category->children as $cat)
            <input type="checkbox" class="form-checkbox" name="category_id[{{$cat->id}}]" id="category_id" value="{{$cat->id}}" @if(old('cat')) {{ old('category_id.'.$cat->id)?'checked':''}} @else {{$data?$data->categories->contains($cat->id)?'checked':'':''}} @endif>
            <span>{{$cat->name}}</span>
            <br>
            @empty
            @endforelse
        </div>
        @empty
        @endforelse
    </div>

    @if ($errors->has('category_id'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('category_id') }}</strong>
    </span>
    @endif
</div>


<!-- <div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 my-5" style="order: 4;">
    <div class="form-control product_cat_menu" onclick="toggleCategoryDiv()">
        <a href="#" >Select Category</a>
        <i class="fas fa-angle-down"></i>
    </div>
    <div class="product_cat_div">
        @forelse($categories as $category)
        <input type="checkbox" class="form-checkbox" name="category_id[{{$category->id}}]" id="category_id" value="{{$category->id}}" @if(old('name')) {{ old('category_id.'.$category->id)?'checked':''}} @else {{$data?$data->categories->contains($category->id)?'checked':'':''}} @endif>
        <span>{{$category->name}}</span>
        <br>
        @empty
        @endforelse
    </div>

    @if ($errors->has('category_id'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('category_id') }}</strong>
    </span>
    @endif
</div> -->