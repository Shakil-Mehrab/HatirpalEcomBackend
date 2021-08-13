<?php

namespace App\Http\Controllers\Api\Video;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Video\VideotIndexResource;

class VideoController extends Controller
{
    public function index()
    {
        $datas = Video::latest()->paginate(request('per-page', 50));
        return VideotIndexResource::collection($datas);
    }
}
