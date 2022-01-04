@extends('layouts.about')

@section('title')
    Jasa Asuransi Tania
@endsection

@section('title-jumbotron')
      Penghargaan
@endsection


@section('content')

        <div class='row'>
          <div class='col-lg-6 col-md-12'>
            <div class="logo-jastan">
            <img src='{{url('images/jastan.png')}}' height='50' width='202' alt='logo-jastan' class="img-fluid mb-5" />
            </div>
            <p class='jastan-adalah'>
              PT Asuransi Jasa Tania Tbk (Asuransi Jastan) adalah asuransi
              umum yang menyajikan berbagai jenis produk Asuransi Standar
              diantaranya Asuransi Kebakaran, Kendaraan Bermotor, Rekayasa,
              Pengangkutan Barang, Surety Bond, Miscellaneous, dan Kesehatan.
              <br />
              <br />
              Asuransi Jastan juga menyajikan produk Pengembangan seperti
              Asuransi JT Oto, JT Griya, Ternak, Tanaman Perkebunan, Askes JT
              Care Cash Plan, Askes JT Care Micro, dan Tanggung Gugat
              Pelayanan Kesehatan Rumah Sakit
            </p>
          </div>
          <div class='col-lg-6 col-md-12 image-sekilas'>
            <img src='{{url('images/img/pengembangan.png')}}' class="img-fluid " height={575} width={572} alt='image-sekilas' />
          </div>
        </div>

@endsection