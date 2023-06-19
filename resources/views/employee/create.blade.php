@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('barangs.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="Kode" class="form-label">Kode
                                Barang</label>
                            <input class="form-control @error('Kode_barang') is-invalid @enderror" type="text"
                                name="Kode_barang" id="Kode_barang" value="{{ old('Kode_barang') }}"
                                placeholder="Enter Kode barang">
                            @error('Kode_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama
                                Barang</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror" type="text"
                                name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" placeholder="Enter Last Name">
                            @error('nama_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Deskripsi" class="form-label">Deskripsi</label>
                            <input class="form-control @error('Deskripsi') is-invalid @enderror" type="text" name="Deskripsi"
                                id="Deskripsi" value="{{ old('Deskripsi') }}" placeholder="Enter Deskripsi">
                            @error('Deskripsi')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Harga" class="form-label">Harga</label>
                            <input class="form-control @error('Harga') is-invalid @enderror" type="text" name="Harga"
                                id="Harga" value="{{ old('Harga') }}" placeholder="Enter Harga">
                            @error('Harga')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="Satuan" class="form-label">Satuan</label>
                            <select name="Satuan" id="Satuan" class="form-select">
                                @foreach ($satuans as $Satuan)
                                    <option value="{{ $Satuan->id }}"
                                        {{ old('Satuan') == $Satuan->id ? 'selected' : '' }}>
                                        {{ $Satuan->code . ' - ' . $Satuan->name }}</option>
                                @endforeach
                            </select>
                            @error('Satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                                <i class="bi-arrow-left-circle me-2"></i>
                                Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3">
                                <i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
