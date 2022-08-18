<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (User::find(Auth::id())->getRoleNames()[0] == 'Admin') {

            $products = Product::latest()->paginate(5);
            return view('products.index', compact('products'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } else {

            $products = Product::latest()->where('user_id', Auth::id())->paginate(5);
            return view('products.index', compact('products'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryes = Category::all();

        return view('products.create', compact('categoryes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file = $request->file('image');



        request()->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        $image_names = [];
        // loop through images and save to /uploads directory
        foreach ($request->file('image') as $image) {
            $name = time() . $image->getClientOriginalName();
            $image->move(public_path() . '/uploads/', $name);
            $image_names[] = $name;
        }
        Product::create([
            'name' => $request->post('name'),
            'detail' => $request->post('detail'),
            'img' => $image_names,
            'category_id' => $request->post('category'),
            'user_id' => Auth::id(),
            'price' => 19
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categoryes = Category::all();

        return view('products.edit', compact(['product', 'categoryes']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
            // 'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        $img = $product->img;
        if ($request->post('delete_img')) {
            $img = array_merge(array_diff($img, $request->post('delete_img')));

            // dd($img);
        }
        if ($request->file('image')) {
            foreach ($request->file('image') as $image) {
                $name = time() . $image->getClientOriginalName();
                $image->move(public_path() . '/uploads/', $name);
                $img[] = $name;
            }
        }

        $product->update([
            'name' => $request->post('name'),
            'detail' => $request->post('detail'),
            'img' => $img,
            'category_id' => $request->post('category'),
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
