<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }} Produk <strong>{{$data->product_title}}</strong>
            <a href="{{ url('/product') }}" class="btn btn-white float-right mr-2">
                <i class="fas fa-chevron-left"></i>
            </a>
        </h2>
    </x-slot>
    <div class="container mt-4">
        <div class="card">
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
                        <label for="exampleInputPassword1">Product Price</label>
                        <input type="text" class="form-control" value="{{$data->product_price}}" name="product_price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Image</label>
                        <input type="text" class="form-control" value="{{$data->product_image}}" name="product_image">
                    </div>
                    <button class="btn btn-success float-right" type="submit"><i class="fa fa-undo fa-sm" aria-hidden="true"></i>&nbsp; Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


