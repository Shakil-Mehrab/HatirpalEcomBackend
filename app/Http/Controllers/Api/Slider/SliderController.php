<?php

namespace App\Http\Controllers\Api\Slider;

use App\Http\Controllers\Controller;
use App\Http\Resources\Slider\SliderResource;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders=Slider::limit(10)->get();
        return SliderResource::collection($sliders);
    }
}
