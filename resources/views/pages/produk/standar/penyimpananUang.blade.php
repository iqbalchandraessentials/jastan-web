@extends('layouts.app')

@section('title')
    Jasa Asuransi Tania
@endsection

@section('content')


<style>

header.masthead {
    margin-top: 70px;
  position: relative;
  margin-bottom: 3rem;
  padding-top: calc(8rem + 57px);
  padding-bottom: 8rem;
  background: no-repeat center center;
  background-color: #6c757d;
  background-size: cover;
  background-attachment: scroll;
}

header.masthead:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: transparent;
  opacity: 0.5;
}

header.masthead .page-heading,
header.masthead .post-heading,
header.masthead .site-heading {
  color: #fff;
}

header.masthead .page-heading,
header.masthead .site-heading {
  text-align: center;
}

header.masthead .page-heading h1,
header.masthead .page-heading .h1,
header.masthead .site-heading h1,
header.masthead .site-heading .h1 {
  font-size: 3rem;
}

header.masthead .page-heading .subheading,
header.masthead .site-heading .subheading {
  font-size: 1.5rem;
  font-weight: 300;
  line-height: 1.1;
  display: block;
  margin-top: 0.625rem;
  font-family: "Open Sans", -apple-system, BaMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

header.masthead .post-heading h1,
header.masthead .post-heading .h1 {
  font-size: 2.25rem;
}


@media (min-width: 992px) {
  header.masthead {
    padding-top: 21rem;
    padding-bottom: 6.5rem;
    background-position-y: -169px;
  }

  header.masthead .page-heading h1,
  header.masthead .page-heading .h1,
  header.masthead .site-heading h1,
  header.masthead .site-heading .h1 {
    font-size: 5rem;
  }

  header.masthead .post-heading h1,
  header.masthead .post-heading .h1 {
    font-size: 3.5rem;
  }

 
}


</style>

<header class="masthead" data-aos="fade-down" data-aos-delay="200" style="background-image: url('https://jastan.co.id/storage/img/products/1611426934img.webp'); ">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            {{-- <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Tentang Kami</h1>
                    <span class="subheading">Jasa Asuransi Tania</span>
                </div>
            </div> --}}
        </div>
    </div>
</header>


<div class='container'>
    <div class="row">

    <div class="col-lg-9 col-12">
      <div class='d-flex justify-content-center'>
       

            <div class="card-body">
              <p class="text-muted text-md-center text-justify">"Pertanggungan yang memberikan proteksi atas kehilangan uang selama uang disimpan di dalam brankas atau tempat yang sesuai dengan ketentuan polis."</p>
            </div>
          </div>

          <section class="info">
              <p><strong>Kriteria Pertanggungan</strong></p>
            <p>Berlaku untuk setiap penyimpanan uang yang berada di wilayah Indonesia.</p>

            <p><strong>Periode Pertanggungan</strong></p>

            <p>Jangka waktu pertanggungan sesuai kesepakatan dengan Calon Tertanggung.</p>

            <p><strong>Risiko yang Dijamin</strong></p>

            <ul>
              <li>Pertanggungan ini menjamin kehilangan atas Uang dari dalam Tempat Penyimpanan sebagai akibat tindakan pencurian yang dilakukan oleh pihak lain, termasuk pencurian yang disertai dengan kekerasan/ penodongan atau pengrusakan terhadap Tempat Penyimpanan tersebut.</li>
              <li>Pertanggungan ini juga menjamin kerusakan atas Tempat Penyimpanan sebagai akibat tindakan pencurian atau usaha pencurian yang dilakukan oleh pihak lain setinggi tingginya Rp. 10.000.000,-(sepuluh juta rupiah).</li>
            </ul>

            <p><strong>Prosedur Penutupan Asuransi</strong></p>
            <ul>
              <li>Tertanggung mengisi SPPA (Surat Permintaan Penutupan Asuransi)</li>
              <li>Tertanggung melengkapi dokumen yang dibutuhkan</li>
              <li>Penanggung melakukan analisa risiko</li>
              <li>Penanggung menerbitkan dan menyerahkan Polis kepada Tertanggung</li>
              <li>Tertanggung membayar premi</li>
              <li>Jika tertanggung menghendaki adanya perubahan pada Polis yang telah diterbitkan harus disertai permintaan Tertulis dari Tertanggung</li>
              </ul>

              <p><strong>Prosedur Klaim</strong></p>
              <ul>
                <li>Tertanggung melaporkan dalam waktu 3 hari kalender sejak tanggal kejadian</li>
                <li>Tertanggung mengisi formulir klaim</li>
                <li>Dokumen klaim yang diperlukan dari Tertanggung:<br>o Surat Tuntutan / Pemberitahuan dari Tertanggung<br>o Copy Polis<br>o Bukti Pembayaran Premi<br>o Surat Keterangan dari Kepolisian<br>o Berita Acara Kronologi Kejadian<br>o Kuitansi asli dan copy</li>
                <li>Penanggung melakukan validasi dan analisa klaim, jika klaim tidak valid maka Tertanggung akan menerima surat penolakan</li>
                <li>Jika klaim valid, maka penanggung akan memberikan konfirmasi persetujuan klaim kepada Tertanggung</li>
                <li>Penanggung melakukan pembayaran klaim dalam waktu yang ditentukan dalam polis, setelah klaim dinyatakan benar dan ada kesepakatan ganti rugi antara Penanggung dan Tertanggung</li>
                </ul>

                <p>Rate Premi untuk keterangan pertanggungan diatas = 0.25%<br>Biaya Polis = Rp 25.000,-<br>Biaya Meterai = Rp 6.000,-</p>
          </section>




        
    </div>

    <div class="col-3 d-none d-lg-block">
      <div class="card" data-aos="fade-left" data-aos-delay="2000">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> <b>Produk Standar</b> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none"> Asuransi Pengangkutan Barang </a> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none"> Asuransi Kendaraan Bermotor </a> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none"> Asuransi Penyimpanan Uang</a> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none"> Asuransi Pengiriman Uang</a></li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none"> Asuransi Proyek Konstruksi </a> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none"> Asuransi Gempa Bumi  </a> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none"> Asuransi Kebakaran </a> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none"> Asuransi PAR & IAR</a> </li>
          <br>
          <li class="list-group-item"> <b>Produk Pengembangan</b> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none">JT Care Cash Plan </a> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none">JT CARE MICRO </a> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none">Jastan Trip </a></li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none">JT Travel </a> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none">JT Griya</a> </li>
          <li class="list-group-item small "> <a href="" class="text-dark text-decoration-none">JT OTO </a> </li>
        </ul>
      </div>
    </div>
    
  </div>
  </div>









@endsection