<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function index()
    {
        $data = DB::select('select * from products');
        return view('product',compact('data'));     
    }



    public function showProduct($slug)
    {
        $data = \DB::table('products')
                    ->where('product_slug',$slug)
                    ->first();
        return view('showproduct', compact('data'));
    }

	public function edit($id)
	{
		$data = \DB::table('products')->where('id',$id)->get();
		return view('editproduct',compact('data'));
    }
    
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('products')->where('id',$request->id)->update([
            'id' => $request->id,
            'product_title' => $request->title,
            'product_slug'  => $request->slug,
            'product_image' => $request->image
            ]);

            // redirect
            return redirect('/product');
	}
 


    
}