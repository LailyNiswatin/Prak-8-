@extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="Kode_barang" class="form-label">Kode 
                            Barang</label>
                        <h5>{{ $barang->Kode_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Nama_barang" class="form-label">Nama 
                            Barang</label>
                        <h5>{{ $barang->Nama_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Deskripsi" class="form-label">Deskripsi</label>
                        <h5>{{ $barang->Deskripsi }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Harga" class="form-label">Harga</label>
                        <h5>{{ $barang->Harga }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Satuan" class="form-label">Satuan</label>
                        <h5>{{ $barang->Satuan->name }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                            <i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
