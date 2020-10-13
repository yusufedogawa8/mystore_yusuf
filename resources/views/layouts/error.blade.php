@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 bg-white">
        <div class="card">
            <div class="card-header bg-danger">
                <h2 class="m-0 p-0">INFO
                    <a href="{{ url('/product') }}" class="btn btn-danger float-right mr-2">
                    <i class="fas fa-chevron-left"></i></a>
                </h2>
            </div>
            <div class="card-body">
                ERROR 404 ALREADY EXISTS
            </div>
        </div>
    </div>
</div>    
@endsection


