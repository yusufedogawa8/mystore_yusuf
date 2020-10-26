<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produk Baru') }}
            <a href="{{ url('/product') }}" class="btn btn-white float-right mr-2">
                <i class="fas fa-chevron-left"></i>
            </a>
        </h2>
    </x-slot>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <form action="/product/simpan" method="POST">
                @csrf
                    <label for="" class="mt-3">Nama Produk :</label>
                    <input type="text" name="product_title" class="form-control mb-2" placeholder="Masukkan Nama Produk Baru" required>
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block mt-3">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <span>{{ $message }}</span>
                    </div>
                    @endif
                    <label for="">Harga Produk :</label>
                    <input type="text" name="product_price" class="form-control mb-2" placeholder="Masukkan Harga Produk Baru" required>
                    <label for="">Gambar Produk :</label>
                    <!-- <input type="text" name="product_image" class="form-control mb-4" placeholder="Masukkan Gambar Produk Baru"> -->
                    <div class="input-group mb-5">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload Gambar Produk</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="product_image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                            <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                        </div>
                    </div>
                    <button class="btn btn-success float-right">Buat Data&nbsp; <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>