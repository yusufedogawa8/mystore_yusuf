@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 bg-white">
        
    </div> 

    <div class="col-12 bg-white">
        <div class="card">
            <div class="card-header bg-primary">
                <a href="{{ url('/product') }}">
                    <button class="btn btn-success float-left mr-2">Back</button>
                </a>
                <h2>Show</h2>
            </div>
            <div class="card-body">
                <form>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Title</label>
                        <input type="text" class="form-control" value="{{$data->product_title}}" aria-describedby="emailHelp" placeholder="Enter email" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Product Slug</label>
                        <input type="text" class="form-control" value="{{$data->product_slug}}" placeholder="Password" readonly>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Product Image</label>
                          <input type="text" class="form-control" value="{{$data->product_image}}" placeholder="Password" readonly>
                      </div>
                    

                    
                </form>
            </div>
        </div>
    </div>

       
</div>    
@endsection


