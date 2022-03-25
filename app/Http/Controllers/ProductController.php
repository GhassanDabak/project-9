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

    public function reactProducts(){
        $products = Product::all();
        return response()->json([
            "products"=>$products
        ]);
    }

    public function add (){
        $category = Category::all();
        return view('admin.products.create' ,compact('category'));
    }

    public function insert (Request $request ){
        $product = new Product();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/uploads', $filename);
            $product->image = $filename;
        }

        $product->cat_id = $request->input('cat_id');
        $product->name = $request->input('name');
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
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/uploads', $filename);
            $product->image = $filename;
        }

        $product->cat_id = $request->input('cat_id');
        $product->name = $request->input('name');
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

    public function productsOnId($id)
    {
        $products = Product::find($id);
        $category = Category::where('id',$products['cat_id'])->first();
        // $category = Category::where('id',$products->cat_id)->get();
        return response()->json([
            'success' => "yes",
            'category' => $category,
            'product'=> $products
        ]);
    }
    public function cat_products($id)
    {
        $cat = Category::where('id',$id)->first();
        $products = Product::where('cat_id',$cat['id'])->get();
        return response()->json([
            'success'=> "yes",
            'category'=> $cat,
            'products'=>$products
        ]);
    }
}
