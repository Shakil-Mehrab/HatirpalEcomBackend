<div class="form-group {{ $errors->has('unit') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order:3">
    <label for="unit" class="control-label">Product Unit</label>
    <select class="form-control" name="unit" id="parent_id">
        <option value="">Select One</option>
        <option value="piece"  @if(old('unit')) {{ old('unit')=="piece"?'selected':''}} @else {{$data?$data->unit=='piece'?'selected':'':''}} @endif>Piece</option>
        <option value="ft"  @if(old('unit')) {{ old('unit')=="ft"?'selected':''}} @else {{$data?$data->unit=='ft'?'selected':'':''}} @endif>Ft</option>
        <option value="square_ft"  @if(old('unit')) {{ old('unit')=="square_ft"?'selected':''}} @else {{$data?$data->unit=='square_ft'?'selected':'':''}} @endif>Square Ft</option>
        <option value="square_metre"  @if(old('unit')) {{ old('unit')=="square_metre"?'selected':''}} @else {{$data?$data->unit=='square_metre'?'selected':'':''}} @endif>Square Metre</option>
        <option value="kg"  @if(old('unit')) {{ old('unit')=="kg"?'selected':''}} @else {{$data?$data->unit=='kg'?'selected':'':''}} @endif>Kg</option>
        <option value="litre"  @if(old('unit')) {{ old('unit')=="litre"?'selected':''}} @else {{$data?$data->unit=='litre'?'selected':'':''}} @endif>Litre</option>
        <option value="km"  @if(old('unit')) {{ old('unit')=="km"?'selected':''}} @else {{$data?$data->unit=='km'?'selected':'':''}} @endif>Km</option>
        <option value="metre"  @if(old('unit')) {{ old('unit')=="metre"?'selected':''}} @else {{$data?$data->unit=='metre'?'selected':'':''}} @endif>Metre</option>
        <option value="dozen"  @if(old('unit')) {{ old('unit')=="dozen"?'selected':''}} @else {{$data?$data->unit=='dozen'?'selected':'':''}} @endif>Dozen</option>
        <option value="inch"  @if(old('unit')) {{ old('unit')=="inch"?'selected':''}} @else {{$data?$data->unit=='inch'?'selected':'':''}} @endif>Inch</option>
        <option value="sack"  @if(old('unit')) {{ old('unit')=="sack"?'selected':''}} @else {{$data?$data->unit=='sack'?'selected':'':''}} @endif>Sack</option>
        <option value="unit"  @if(old('unit')) {{ old('unit')=="unit"?'selected':''}} @else {{$data?$data->unit=='unit'?'selected':'':''}} @endif>Unit</option>
        <option value="set"  @if(old('unit')) {{ old('unit')=="set"?'selected':''}} @else {{$data?$data->unit=='set'?'selected':'':''}}  @endif>Set</option>
        <option value="carton"  @if(old('unit')) {{ old('unit')=="carton"?'selected':''}} @else {{$data?$data->unit=='carton'?'selected':'':''}} @endif>Carton</option>
    </select>
    @if ($errors->has('unit'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('unit') }}</strong>
    </span>
    @endif
</div>


<div class="form-group {{ $errors->has('waranty') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 2;">
@php
$waranty='';
if(!empty($data->waranty)){
$waranty=$data->waranty;
}
@endphp
<label for="waranty" class="control-label">waranty</label>
    <input type="text" class="form-control" name="waranty" id="waranty" placeholder="10days 10 weeeks 10 months 10years" value="{{old('waranty')?old('waranty'):$waranty}}">
    @if ($errors->has('waranty'))
    <span class="help-block">
        <strong style="color:red">{{ $errors->first('waranty') }}</strong>
    </span>
    @endif
</div>
<!-- <div class="col-lg-4 col-md-4 col-sm-12 my-3" style="order: 3;">
<label for="images" class="control-label">Waranty (After Sale)</label>
    <div class="form-control toggle_menu mb-2" onclick="toggleMenu('waranty')">
        <span><strong>Like</strong></span>
        <i class="fas fa-angle-down"></i>
    </div>
    <div class="toggle_div_waranty hidden">
        <div class="form-group {{ $errors->has('waranty') ? ' has-error' : '' }}">
            <div>
                <input type="text" class="form-control mt-1" name="waranty" id="waranty" placeholder="Days">
                <input type="text" class="form-control mt-1" name="waranty" id="waranty" placeholder="Weeks">
                <input type="text" class="form-control mt-1" name="waranty" id="waranty" placeholder="Months">
                <input type="text" class="form-control mt-1" name="waranty" id="waranty" placeholder="Years">
                
            </div>
            @if ($errors->has('waranty'))
            <span class="help-block">
                <strong style="color:red">{{ $errors->first('waranty') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div> -->
<div style="order: 9;">
    <div class="form-control toggle_menu mb-2" onclick="toggleMenu('des')">
        <span><strong>Description</strong></span>
        <i class="fas fa-angle-down"></i>
    </div>
    <div class="toggle_div_des hidden">
        <div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12">
            <label for="short_description" class="control-label">Short Description</label>
            <textarea type="text" class="form-control my-editor" name="short_description" id="short_description" placeholder="Short Description" cols="30" rows="15">
            @if(old('short_description'))
            {{ old('short_description')}}
            @else
            {{$data?$data->short_description:''}}
            @endif
            </textarea>
            @if ($errors->has('short_description'))
            <span class="help-block">
                <strong style="color:red">{{ $errors->first('short_description') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 mb-5">
            <label for="description" class="control-label">Description</label>
            <textarea type="text" class="form-control my-editor" name="description" id="description" placeholder="Description" cols="30" rows="15">
            @if(old('description'))
            {{ old('description')}}
            @else
            {{$data?$data->description:''}}
            @endif
            </textarea>
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
        <strong style="color:red">{{ $errors->first('images.*') }}</strong>
    </span>
    @endif
</div>
@php
$stock='';
if(!empty($data->productStock->quantity)){
$stock=$data->productStock->quantity;
}
@endphp
<div class="form-group {{ $errors->has('stock') ? ' has-error' : '' }} col-lg-4 col-md-4 col-sm-12 my-3" style="order: 2;">
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
        <input type="checkbox" class="form-checkbox" name="size_id[{{$size->id}}]" id="size_id" value="{{$size->id}}" @if(old('cat')) {{ old('size_id.'.$size->id)?'checked':''}} @else {{$data?$data->sizes->contains($size->id)?'checked':'':''}} @endif>
        <span style="margin-right: 5px;">{{$size->size}}</span>
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
            <div class="cat_child_div">
                @forelse($cat->children as $cat)
                <input type="checkbox" class="form-checkbox" name="category_id[{{$cat->id}}]" id="category_id" value="{{$cat->id}}" @if(old('cat')) {{ old('category_id.'.$cat->id)?'checked':''}} @else {{$data?$data->categories->contains($cat->id)?'checked':'':''}} @endif>
                <span>{{$cat->name}}</span>
                <br>
                @empty
                @endforelse
            </div>
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

