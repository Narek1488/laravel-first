<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;


use Illuminate\Support\Arr;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   

        $categoryes = Category::all();
        
        $products = Product::all();
        $lastest = Product::latest()->limit(3)->get();
        return view('dashboard.home', compact(['categoryes', 'products', 'lastest']));
    }
    public function show(Product $product){
        return view('dashboard.show', compact('product'));
    }

    public function oneCategory(Category $category) {
        $products = $category->products->all();
        $categoryes = Category::all();

        return view('dashboard.category', compact(['categoryes','products']));
    }
}
