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
}
