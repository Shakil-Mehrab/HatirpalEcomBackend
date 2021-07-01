<?php

namespace App\Http\Controllers\Api\Region;

use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Scoping\Scopes\SelectedCountryScope;
use App\Http\Resources\Region\RegionIndexResource;

class RegionController extends Controller
{
    public function country(){
        $regions=Region::latest()
        ->withScopes(
            $this->scopes()
        )
        ->get();;
        return RegionIndexResource::collection($regions);

    }
    public function region($slug){
        $region=Region::where("slug",$slug)->first();
        // $regions=Region::where("parent_id",$region->id)->get();
        return RegionIndexResource::collection($region->children)
        ->additional([
            'meta'=>$this->meta($region)
           ]);
    }
    protected function meta($region){
        return[
            'expense'=>$region->expense,
        ];
    }
    protected function scopes()
    {
        return [
            'countries' => new SelectedCountryScope(),
        ];
    }
}
