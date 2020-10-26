@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="p-0 m-0">Upload File <a href="{{ url('/product') }}" class="btn btn-primary float-right"><i class="fas fa-chevron-left"></i></a></h3>
        </div>
        <div class="card-body">
        <form action="/product/upload/data" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Upload File :</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input form-control" name="file" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-block">Upload Data</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection