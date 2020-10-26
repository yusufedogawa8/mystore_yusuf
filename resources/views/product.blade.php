<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Product') }}
                </h2>
            </div>
            <div class="col-8">
                <div class="container">
                @if ($message = Session::get('error'))
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <span>{{ $message }}</span>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <span>{{ $message }}</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </x-slot>
<div class="row">
    <div class="container mt-4">
        <div class="kotak">
            <div class="row">
                <div class="btn-group mb-4" role="group" aria-label="Basic example">
                    <a href="{{ url('tambah') }}" class="btn btn-primary float-right">
                        Add New Product&nbsp; <i class="fa fa-plus-square" aria-hidden="true"></i>
                    </a>
                    <!-- Button Download modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#downloadModal">
                        Export All Data&nbsp; <i class="fa fa-table" aria-hidden="true"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin mengunduh semua data?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="text-muted text-sm">Pilih format unduhan : 
                                    <ol>
                                        <li>Excel</li>
                                        <li>CSV</li>
                                        <li>PDF</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                                <a href="{{ url('product/export/xlsx') }}" type="button" class="btn btn-info btn-sm">Unduh&nbsp; <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Microsoft_Excel_2013_logo.svg/1043px-Microsoft_Excel_2013_logo.svg.png" alt="Excel" height="20" width="20"></a>
                                <a href="{{ url('product/export/csv') }}" type="button" class="btn btn-primary btn-sm">Unduh&nbsp; <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Micorsoft_Excel_2016_CSV_Icon.svg/1200px-Micorsoft_Excel_2016_CSV_Icon.svg.png" alt="CSV" height="20" width="20"></a>
                                <a href="{{ url('product/export/pdf') }}" type="button" class="btn btn-danger btn-sm">Unduh&nbsp; <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" alt="CSV" height="20" width="20"></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                    <a class="btn btn-primary rounded-right" href="{{ url('product/upload') }}">
                        Import Some Data&nbsp; <i class="fa fa-file" aria-hidden="true"></i>
                    </a>
            </div>
        </div>

        <table class="table table-hover">
        <caption><i><small>*Harga dapat berubah sewaktu-waktu</small></i></caption>
            <thead>
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
                        <td>{{ $users->product_slug }}</td>
                        <td>{{ $users->product_image }}</td>
                        <td>Rp. {{ number_format($users->product_price,2,",",".") }}</td>
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
</x-app-layout>

