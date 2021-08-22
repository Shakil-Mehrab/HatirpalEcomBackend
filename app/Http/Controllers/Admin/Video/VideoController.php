<?php

namespace App\Http\Controllers\Admin\Video;

use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Video\VideoHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Video\VideoInputRequest;
use App\Http\Requests\Video\VideoUpdateRequest;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $datas = $this->datas();
        $model = 'video';
        $columns = Video::columns();
        if (request('per-page') or request('page')) {
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }

    public function create()
    {
        $data = '';
        $columns = Video::create_columns();
        $model = 'video';
        return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(VideoInputRequest $request, VideoHandling $videoHandling, StoreUpdateData $input)
    {
        $product = new Video();

        // $input->videoStoreUpdate($product, $request);
        $videoHandling->uploadVideo($product, $request);

        $request->user()->videos()->save($product);

        return redirect('admin/video')
            ->withSuccess('Video Created Successfully');
    }
    public function show($slug)
    {
        $data = Video::where('slug', $slug)
            ->firstOrFail();
        $columns = Video::columns();
        $model = 'video';
        return view('layouts.data.detail', compact('data', 'columns', 'model'));
    }
    public function edit($slug)
    {
        $data = Video::where('slug', $slug)->firstOrFail();
        $columns = Video::edit_columns();
        $model = 'video';
        return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(VideoUpdateRequest $request, VideoHandling $videoHandling, StoreUpdateData $input, $slug)
    {
        $product = Video::where('slug', $slug)
            ->firstOrFail();

        $videoHandling->uploadVideo($product, $request);

        $product->update();

        return back()->withSuccess('Video Updated Successfully');;
    }

    protected function datas()
    {
        $datas = Video::orderBy('id', 'desc')
            // ->with('product', 'user')
            ->pagination(request('per-page'));
        return $datas;
    }
}
