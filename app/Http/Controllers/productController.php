<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    public function index()
    {
        $data = Product::paginate(5);
        return view('product',compact('data'));     
    }

    public function tambah()
    {
        return view('add');
    }

    public function showProduct($slug)
    {
        $data = \DB::table('products')
                    ->where('product_slug',$slug)
                    ->first();
        return view('showproduct', compact('data'));
    }

	public function edit(Product $product)
	{
		$data = $product;
		return view('editproduct',compact('data'));
    }
    
	public function update(Request $request)
	{
        $data = [
            'id' => $request->id,
            'product_title' => $request->product_title,
            'product_slug' => \Str::slug($request->product_title),
            'product_image' => $request->product_image,
            'product_price' => $request->product_price,
        ];
        // dd($data);
        
        if(Product::where('product_slug', \Str::slug($request->product_title))->exists()){
            $ganti = [
                'id' => $request->id,
                'product_image' => $request->product_image,
                'product_price' => $request->product_price,
            ];
            Product::where('id', $request->id)->update($ganti);
            return redirect('/product')->with(['error' => 'Your product was same, but another data is still changed :)']);
        } else {
            Product::where('id', $request->id)->update($data);
            return redirect('/product');
        }
	}
 
    public function simpan(Request $request)
    {
        $product = new Product;
        $product->product_title = $request->product_title;
        $product->product_slug = \Str::slug($request->product_title);
        $product->product_image = $request->product_image;
        $product->product_price = $request->product_price;
        if(Product::where('product_slug', $product->product_slug)->exists()){
            return redirect('/tambah')->with(['error' => 'Product already exists! Please try again...']);
        } else {
            $product->save();
            return redirect('product');
        }
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect('/product');
    }
    
}