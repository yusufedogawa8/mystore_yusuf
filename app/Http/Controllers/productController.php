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
        return view('editproduct', compact('data'));
    }



    // public function showProduct($slug)
    // {
    //     $data = Product::where('product_slug',$slug)
    //             ->first();
    //             if(!$data){
    //                 abort(404);
    //             }
    //     // dd($data);
    //     // return view('product', compact('data'));
    // }
}