<?php

namespace App\Http\Controllers;

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
        if (auth()->user()->status == 'user') {
            return view('layouts.userprofile.view');
        }
        if (auth()->user()->status == 'supplier') {
            $data = auth()->user();
            $products = auth()->user()->products;
            $columns = Supplier::columns();
            $model = 'supplier';
            return view('supplier', compact('data', 'columns', 'model', 'products'));
        }
        return view('home');
    }
}
