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

    	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$data = DB::table('products')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editproduct',['id' => $id]);
 
	}
 
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

    
}