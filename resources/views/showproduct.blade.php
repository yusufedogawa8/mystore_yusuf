@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 bg-white">
        
    </div> 

    <div class="col-12 bg-white">
        <div class="card">
            <div class="card-header bg-primary">
                <h2 class="m-0 p-0">Show {{$data->product_title}}
                    <a href="{{ url('/product') }}" class="btn btn-primary float-right mr-2">
                    <i class="fas fa-chevron-left"></i></a>
                </h2>
            </div>
            <div class="card-body">
                <form>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Title</label>
                        <input type="text" class="form-control" value="{{$data->product_title}}" aria-describedby="emailHelp" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Product Slug</label>
                        <input type="text" class="form-control" value="{{$data->product_slug}}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Product Price</label>
                        <input type="text" class="form-control" value="Rp. {{ number_format($data->product_price,2,',','.') }}" readonly>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Product Image</label>
                          <input type="text" class="form-control" value="{{$data->product_image}}" readonly>
                      </div>
                    

                    
                </form>
            </div>
        </div>
    </div>

       
</div>    
@endsection


