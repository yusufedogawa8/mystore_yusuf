@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 bg-white">
        
    </div> 

    <div class="col-12 bg-white">
        <div class="card">
            <div class="card-header bg-primary">
                <h2 class="m-0 p-0">Buat Produk Baru 
                    <a href="{{ url('/product') }}" class="btn btn-primary float-right mr-2">
                    <i class="fas fa-chevron-left"></i></a>
                </h2>
            </div>
            <div class="card-body">
                <form action="/product/simpan" method="POST">
                @csrf
                    <label for="">Nama Produk :</label>
                    <input type="text" name="product_title" class="form-control mb-2" placeholder="Masukkan Nama Produk Baru">
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <label for="">Harga Produk :</label>
                    <input type="text" name="product_price" class="form-control mb-2" placeholder="Masukkan Harga Produk Baru">
                    <label for="">Gambar Produk :</label>
                    <!-- <input type="text" name="product_image" class="form-control mb-4" placeholder="Masukkan Gambar Produk Baru"> -->
                    <div class="input-group mb-5">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload Gambar Produk</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="product_image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                        </div>
                    </div>
                    <button class="btn btn-success float-right">Buat Data&nbsp; <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>

       
</div>    
@endsection