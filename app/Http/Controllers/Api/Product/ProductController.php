<?php

namespace App\Http\Controllers\Api\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Scoping\Scopes\SizeScope;
use App\Scoping\Scopes\BrandScope;
use App\Scoping\Scopes\PriceScope;
use App\Scoping\Scopes\SearchScope;
use App\Http\Controllers\Controller;
use App\Scoping\Scopes\CategoryScope;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductIndexResource;

class ProductController extends Controller
{
    public function view()
    {
        $products = Product::get();
        // $items = \Cart::getContent();
        return view('welcome', compact('products'));
    }

    public function index()
    {
        $datas = Product::latest()
            ->withScopes(
                $this->scopes()
            )
            ->paginate(request('per-page', 50));
        return ProductIndexResource::collection($datas);
    }
    public function show($slug)
    {
        $data = Product::where('slug', $slug)
            ->firstOrFail();
        return new ProductResource($data);
    }
    protected function scopes()
    {
        return [
            'categories' => new CategoryScope(),
            'sizes' => new SizeScope(),
            'price' => new PriceScope(),
            'brand' => new BrandScope(),
            'search' => new SearchScope(),
        ];
    }
}
