<?php

namespace App\Http\Controllers\Admin\Variable;

use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Bag\Admin\Status\ChangeStatus;
use App\Mail\Supplier\MailForSupplierApproved;

class VariableController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $modelPath = 'App\Models\\' . ucfirst(request('model'));
        $datas = $modelPath::search(request('query'));
        $columns = $modelPath::columns();
        $model = request('model');
        return view('layouts.data.table', compact('datas', 'columns', 'model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function status(ChangeStatus $status, $slug)
    {
        $modelPath = 'App\Models\\' . ucfirst(request('model'));
        $data = $status->statusChange($slug, $modelPath, request('status'));
        $datas = $this->datas($modelPath);
        $columns = $modelPath::columns();
        $model = request('model');
        if (request('model') == 'supplier' && request('status') == 'approved') {
            Mail::to($data->email)->send(new MailForSupplierApproved($data));
        }
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteData $delete, $slug)
    {
        $modelPath = 'App\Models\\' . ucfirst(request('model'));
        $delete->dataDelete($slug, $modelPath);
        $datas = $this->datas($modelPath);
        $columns = $modelPath::columns();
        $model = request('model');
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    protected function datas($modelPath)
    {
        $datas = $modelPath::orderBy('id', 'desc')
            ->pagination(request('per-page'));
        return $datas;
    }
}
