<?php

namespace App\Http\Controllers\Api\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Scoping\Scopes\CategoryScope;
use App\Scoping\Scopes\SelectedCategoryScope;
use App\Http\Resources\Category\CategoryResource;

class CategoryController extends Controller
{
    public function index(){
        $datas=Category::latest()
        ->with('children','children.children')
        ->parents()
        ->withScopes(
            $this->scopes()
        )
        ->get();
        return CategoryResource::collection($datas);
    }
    protected function scopes()
    {
        return [
            'selects' => new SelectedCategoryScope(),
        ];
    }

    public function action(){
        return 'lkjkl';
    }
}
