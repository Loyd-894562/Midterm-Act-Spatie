<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('name', 'asc')->get();
        return inertia('Product/Index',[
            'products' =>$products
        ]);
    }

    public function create(){
        return inertia('Product/Create');
    }

    public function store(Request $request) {
        $fields = $request->validate([
            'name'=>'required',
            'qty' => 'required'
        ]);

        Product::create($fields);

        return redirect('/products')->with('message', 'Product successfully created');
    }

    public function edit(Product $products){

        return inertia('Product/Edit', ['products' => $products]);
    }

    public function update(Request $request, Product $products){
        $fields = $request->validate([
            'name'=>'required|string',
            'qty'=> 'required'
        ]);

        $products->update($fields);
        return redirect('/products')->with('message', "You successfully updated the product");
    }

    public function destroy(Product $products) {
        $products->delete();

        return back();
    }

    public function show( Product $products){
        return inertia('Product/Show',[
            'products' =>$products
        ]);
    }
}
