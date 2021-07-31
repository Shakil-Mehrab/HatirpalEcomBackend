<?php

namespace App\Http\Controllers\Admin\Bulk;

use App\Models\User;
use App\Models\About;
use App\Models\Order;
use App\Models\Region;
use App\Models\Slider;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Condition;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;

class BulkController extends Controller
{
    public function delete(Request $request, DeleteData $delete)
    {

        if ($request['with_selected'] == 'delete') {
            foreach ($request['checked_slug'] as $slug) {
                $delete->dataDelete($slug, ucfirst($request['model']));
            }
            $model = 'App\Models\\' . ucfirst($request['model']);
            $datas = $model::orderBy('id', 'desc')
                ->pagination(request('per-page'));
            $columns = $model::columns();
            $model = $request['model'];
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render(); //error dekhabe.byt ok
    }
}
