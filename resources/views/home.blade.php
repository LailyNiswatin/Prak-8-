@extends('layouts.app')
@section('content')
<div class="container mt-4 mb-4">
<div class="jumbotron">
<div class="row">
    <div class="col-10 col-md-7">
  <h1 class="display-5">Hai everyone selamat datang di Master Barang</h1>
  <p class="lead">Master barang adalah Pelaku utama dari sebuah perusahaan ekspedisi yang akan mengantarkan barang/paket kalian dengan aman dan cepat. Tugas dan tanggung jawab utama kurir paket Master Barang adalah melakukan pengiriman paket ke sejumlah alamat tujuan pelanggan dalam satu pengiriman. .</p>
  <a class="btn btn-info btn-lg" href="{{ route('barangs.index') }}" role="button">Go to list barang</a>
  </div>
  <div class="col-8 col-md-5">
     <img src="{{ Vite::asset('resources/images/truck.png') }}" alt="image" class="img-fluid">
  </div>
</div>
 
</div>
</div>
@endsection
