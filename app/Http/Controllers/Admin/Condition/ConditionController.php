<?php

namespace App\Http\Controllers\Admin\Condition;

use App\Models\Condition;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\Status\ChangeStatus;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Condition\ConditionInputRequest;
use App\Http\Requests\Condition\ConditionUpdateRequest;

class ConditionController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $datas = $this->datas();
        $model = 'condition';
        $columns = Condition::columns();

        if (request('per-page') or request('page')) {
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }

    public function create()
    {
        $data = '';
        $columns = Condition::create_columns();
        $model = 'condition';
        return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(ConditionInputRequest $request, StoreUpdateData $input)
    {
        $product = new Condition();

        $input->conditionStoreUpdate($product, $request);


        $product->save();
        return redirect('admin/condition')
            ->withSuccess('Condition Created Successfully');
    }
    public function edit($slug)
    {
        $data = Condition::where('slug', $slug)->firstOrFail();
        $columns = Condition::edit_columns();
        $model = 'condition';
        return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(ConditionUpdateRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
    {
        $product = Condition::where('slug', $slug)
            ->firstOrFail();

        $input->conditionStoreUpdate($product, $request);
        $product->update();

        return back()->withSuccess('Condition Updated Successfully');;
    }
    protected function datas()
    {
        $datas = Condition::orderBy('id', 'asc')
            ->pagination(request('per-page'));
        return $datas;
    }
}
