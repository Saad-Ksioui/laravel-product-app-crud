<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('products.index', [
            'products'=>$product
        ]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
            'description' => 'nullable',
            'image' => 'nullable|max:2048',
        ]);
        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }
    public function edit(Product $product){
        return view('products.edit', [
            'product' => $product
        ]);
    }
    public function update(Request $request, Product $product){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
            'description' => 'nullable',
            'image' => 'nullable|max:2048',
        ]);
        $product -> update($data);
        return redirect(route('product.index'))->with('success', 'The product has been modified');
    }
    public function delete(Product $product){
        $product->delete();
        if (Product::count()===0) {
            Product::truncate();
        }
        return redirect(route('product.index'))->with('success', 'The product has been deleted');
    }
}
