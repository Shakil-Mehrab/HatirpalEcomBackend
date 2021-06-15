<?php

namespace App\Http\Controllers\Api\Slider;

use App\Http\Controllers\Controller;
use App\Http\Resources\Slider\SliderResource;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders=Slider::where('status',1)->get();
        return SliderResource::collection($sliders);
    }
}
