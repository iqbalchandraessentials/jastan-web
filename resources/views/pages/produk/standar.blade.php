@extends('layouts.app')

@section('title')
    Jasa Asuransi Tania
@endsection

@section('content')
<div class='container'>
  <div class='d-flex justify-content-center mt-5'>
    <section class='sekilas col-12  mt-lg-5 mt-md-2'>
      <h1 class="mt-5"><b>Produk Standar</b></h1>
      <div class="row">
        <div class="col-lg-4 col-12 mt-4 mb-4">
          <div class="card">
            <a href="/produk/standar/penyimpanan-uang">
              <img class="card-img-top img-fluid" src="https://jastan.co.id/storage/img/products/1611426934img.webp" alt="Card image cap">
            </a>
              <div class="card-body">
                <p class="card-text"> <b>Asuransi Penyimpanan Uang</b> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12 mt-4 mb-4">
          <div class="card">
            <img class="card-img-top img-fluid" src="https://jastan.co.id/storage/img/products/1611427074img.webp" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"> <b>Asuransi Proyek Konstruksi</b> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12 mt-4 mb-4">
          <div class="card">
            <img class="card-img-top img-fluid" src="https://jastan.co.id/storage/img/products/1611426520apb.webp" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"> <b>Asuransi Pengangkutan Barang</b> </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="card">
            <img class="card-img-top img-fluid" src="https://jastan.co.id/storage/img/products/1611426612akb.webp" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"> <b>Asuransi Kendaraan Bermotor</b> </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="card">
            <img class="card-img-top img-fluid" src="https://jastan.co.id/storage/img/products/1611426746ak.webp" alt="Card image cap">
            <div class="card-body">
              <p class="card-text"> <b>Asuransi Kebakaran</b> </p>
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>
</div>
@endsection

@push('addon-style')
<style>
  .card {
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  }
  .card:hover {
    transform: scale(1.01);
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }
</style>
@endpush