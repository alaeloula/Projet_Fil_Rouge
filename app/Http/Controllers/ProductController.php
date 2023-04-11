<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product=Product::with('category')->get();
        return view('admin.show_product',['products'=>$product]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.product', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productModel = new Product;
        $productModel->title = $request->title;
        $productModel->description = $request->description;
        $productModel->price = $request->price;
        $productModel->quantite = $request->quantite;
        $productModel->discount_price = $request->discount_price;
        $productModel->category_id = $request->category;

        $image = $request->image;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('pd', $imageName);
        $productModel->image = $imageName;

        $productModel->save();
        return redirect()->back()->with('message','Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Product::find($id);
        return view('home.product_details',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=Product::find($id);
        $category=Category::All();
        return view('admin.update_product',['product'=>$product ,'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product=Product::find($id);
        
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantite = $request->quantite;
        $product->discount_price = $request->discount_price;
        $product->category_id = $request->category;

        $image = $request->image;
        if ($image) {
            
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('pd', $imageName);
            $product->image = $imageName;
        }

        $product->save();
        return redirect()->back()->with('message','Product updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
