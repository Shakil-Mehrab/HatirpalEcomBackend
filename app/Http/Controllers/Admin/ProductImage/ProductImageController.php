<?php

namespace App\Http\Controllers\Admin\ProductImage;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Bag\Delete\DeleteData;
use App\Http\Controllers\Controller;

class ProductImageController extends Controller
{
  public function view()
  {
    $datas = ProductImage::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $model = 'productimage';
    $columns = ProductImage::columns();
   
    if (request('per-page') or request('page')) {
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    return view('layouts.data.view', compact('datas', 'columns', 'model'));
  }
  public function delete(DeleteData $delete,$slug)
  {
    $delete->productImageDelete($slug);
   
    $datas = ProductImage::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $columns = ProductImage::columns();
    $model = 'productimage';
    return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
  }

}
