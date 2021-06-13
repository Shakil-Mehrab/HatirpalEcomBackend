<?php

namespace App\Http\Controllers\Admin\Bulk;

use App\Models\User;
use App\Models\Order;
use App\Models\Region;
use App\Models\Slider;
use App\Models\Address;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;

class BulkController extends Controller
{
    public function delete(Request $request, DeleteData $delete)
    {

        if ($request['with_selected'] == 'delete') {
            if ($request['model'] == 'product') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->productDelete($slug);
                }
                $datas = Product::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Product::columns();
            } elseif ($request['model'] == 'productimage') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->productImageDelete($slug);
                }
                $datas = ProductImage::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = ProductImage::columns();
            } elseif ($request['model'] == 'category') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->catDelete($slug);
                }
                $datas = Category::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Category::columns();
            } elseif ($request['model'] == 'region') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->regionDelete($slug);
                }
                $datas = Region::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Region::columns();
            } 
            elseif ($request['model'] == 'address') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->addressDelete($slug);
                }
                $datas = Address::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Address::columns();
            }
            elseif ($request['model'] == 'order') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->orderDelete($slug);
                }
                $datas = Order::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Order::columns();
            }
            elseif ($request['model'] == 'user') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->userDelete($slug);
                }
                $datas = User::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = User::columns();
            }
            elseif ($request['model'] == 'slider') {
                foreach ($request['checked_slug'] as $slug) {
                    $delete->sliderDelete($slug);
                }
                $datas = Slider::orderBy('id', 'desc')
                    ->pagination(request('per-page'));
                $columns = Slider::columns();
            }
            else{
                return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
            }
            $model = $request['model'];
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
}
