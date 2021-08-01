<?php

namespace App\Http\Controllers\Admin\Region;

use App\Models\Region;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Region\RegionInputRequest;
use App\Http\Requests\Region\RegionUpdateRequest;

class RegionController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $datas = $this->datas();
        $columns = Region::columns();
        $model = 'region';
        if (request('per-page') or request('page')) {
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }

    public function search()
    {
        $query = request('query');
        $datas = Region::where('name', 'LIKE', "%" . $query . "%")
            ->orWhere('slug', 'LIKE', "%" . $query . "%")
            ->searchPagination(request('per-page'));
        $columns = Region::columns();
        $model = 'region';
        return view('layouts.data.table', compact('datas', 'columns', 'model'));
    }
    public function create()
    {
        $data = '';
        $columns = Region::create_columns();
        $model = 'region';
        return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(RegionInputRequest $request)
    {
        $product = new Region();
        $product->name = $request['name'];
        $product->parent_id = $request['parent_id'];
        $product->value = $request['value'];
        $product->save();
        return redirect('admin/view/region')
            ->withSuccess('Region Created Successfully');
    }
    public function edit($slug)
    {
        $data = Region::where('slug', $slug)
            ->firstOrFail();
        $columns = Region::edit_columns();
        $model = 'region';
        return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(RegionUpdateRequest $request, $slug)
    {
        $product = Region::where('slug', $slug)
            ->firstOrFail();
        $product->name = $request['name'];
        $product->parent_id = $request['parent_id'];
        $product->value = $request['value'];
        $product->update();
        return back()->withSuccess('Region Updated Successfully');;
    }
    protected function datas()
    {
        $datas = Region::orderBy('id', 'asc')
            ->pagination(request('per-page'));
        return $datas;
    }
}
