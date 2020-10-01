@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container-fluid">
        <div class="col-12 bg-white">
            <button class="btn btn-success float-right mb-3 mt-1">Add</button>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Product Title</th>
                    <th scope="col">Product Slug</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $users)
                    <tr>
                        <td>{{ $users->product_title }}</td>
                        <td>{{ $users->product_slug }}</td>
                        <td>{{ $users->product_image }}</td>
                        <td class="">
                            <a href="{{ url('/product', $users->product_slug) }}">
                                <button class="btn btn-primary center">Edit</button>
                            </a>
                            
                            <button class="btn btn-danger center">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>    
@endsection


