@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">

        <div class="kotak">
            <div class="row">
                <div class="col-9">
                @if ($message = Session::get('error'))
                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <span>{{ $message }}</span>
                    </div>
                @endif
                </div>
                <div class="col-3">
                <a href="{{ url('tambah') }}" class="btn btn-primary float-right mb-4">
                    Tambah Product Baru&nbsp; <i class="fa fa-plus-square" aria-hidden="true"></i>
                </a>
                </div>
            </div>
        </div>

        <table class="table table-hover">
        <caption><i><small>*Harga dapat berubah sewaktu-waktu</small></i></caption>
            <thead class="table">
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Link</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Settings</th>
                </tr>
            </thead>
            <tbody>
                    @forelse ($data as $users)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $users->product_title }}</td>
                        <td>{{ $users->product_image }}</td>
                        <td>{{ $users->product_slug }}</td>
                        <td>Rp. {{ $users->product_price }}</td>
                        <td>
                            <form action="/product/delete/{{ $users->product_slug }}" method="post">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ url('/product', $users->product_slug) }}" class="btn btn-primary center" title="Showing detail Product"><i class="fas fa-eye"></i>&nbsp; Show</a>
                                    <a href="/product/edit/{{ $users->product_slug }}" class="btn btn-warning center" title="Edit your product"><i class="fas fa-edit"></i>&nbsp; Edit</a>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger center"  title="Delete one of your product"><i class="fa fa-trash-alt"></i></button>        
                                </div>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        <div class="row">
                            Belum ada produk terbaru 
                            <div class="ml-3">
                                    <a href="{{ url('tambah') }}" class="btn btn-primary btn-sm" style="text-decoration: none">
                                        Tambah Product Baru&nbsp; <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                    @endforelse
            </tbody>
        </table>
        <div class="mb-3 text-right">
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection

