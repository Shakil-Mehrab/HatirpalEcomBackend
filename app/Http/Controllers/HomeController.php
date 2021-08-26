<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = auth()->user();
        $products = auth()->user()->products;
        $columns = Supplier::columns();
        $model = 'supplier';
        if (auth()->user()->status == 'admin') {
            $products = Product::all();
            $users = User::all();
            $suppliers = Supplier::all();
            return view('home', compact('data', 'columns', 'model', 'products', 'users', 'suppliers'));
        }
        if (auth()->user()->status == 'supplier') {
            return view('supplier', compact('data', 'columns', 'model', 'products'));
        }
        return view('layouts.userprofile.view');
    }
}