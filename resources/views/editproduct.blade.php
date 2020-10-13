@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 bg-white">
        
    </div> 

    <div class="col-12 bg-white">
        <div class="card">
            <div class="card-header bg-primary">
                <h2 class="m-0 p-0">Edit <strong>Produk {{$data->product_title}}</strong>
                    <a href="{{ url('/product') }}" class="btn btn-primary float-right mr-2">
                    <i class="fas fa-chevron-left"></i></a>
                </h2>
            </div>
            <div class="card-body">
                <form action="/product/update" method="POST">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Title</label>
                        <input type="text" class="form-control" value="{{$data->product_title}}" name="product_title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Product Slug</label>
                        <input type="text" class="form-control" value="{{$data->product_slug}}" name="product_slug">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Product Price</label>
                        <input type="text" class="form-control" value="{{$data->product_price}}" name="product_price">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Product Image</label>
                          <input type="text" class="form-control" value="{{$data->product_image}}" name="product_image">
                      </div>
                      <input class="btn btn-success float-right" type="submit" value="Simpan Data">
                </form>
            </div>
        </div>
    </div>

       
</div>    
@endsection


