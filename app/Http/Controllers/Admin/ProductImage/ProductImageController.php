<?php

namespace App\Http\Controllers\Admin\ProductImage;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;

class ProductImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $datas = $this->datas();
        $model = 'productimage';
        $columns = ProductImage::columns();

        if (request('per-page') or request('page')) {
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
    protected function datas()
    {
        $datas = ProductImage::orderBy('id', 'desc')
            ->pagination(request('per-page'));
        return $datas;
    }
}
