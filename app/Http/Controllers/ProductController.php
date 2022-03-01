<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        $product = Product::all();
        $category = Category::all();
        return view('admin.products.index', compact('product','category'));
    }

    public function add (){
        $category = Category::all();
        return view('admin.products.create' ,compact('category'));
    }

    public function insert (Request $request ){
        $product = new Product();

        $product->cat_id = $request->input('cat_id');
        $product->name = $request->input('name');
        $product->img_url = $request->input('img_url');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->img_alt = $request->input('img_alt');
        $product->save();
        return redirect('/products');
    }

    public function edit($id){
        $product = Product::find($id);
        $category = Category::all();
        return view('admin.products.edit', compact('product','category'));
    }

    public function update(Request $request ,$id){
        $product = Product::findOrFail($id);

        $product->cat_id = $request->input('cat_id');
        $product->name = $request->input('name');
        $product->img_url = $request->input('img_url');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->img_alt = $request->input('img_alt');
        $product->update();
        return redirect('/products');
    }

    public function destroy($id){
        $product = Product::find($id);

        $product->delete();
        return redirect('/products');
    }
}
