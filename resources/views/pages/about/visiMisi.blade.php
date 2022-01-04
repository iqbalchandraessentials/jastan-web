@extends('layouts.about')

@section('title')
    Jasa Asuransi Tania
@endsection

@section('title-jumbotron')
    Visi dan Misi
@endsection

@section('content')
<section class="visi-misi">
  <div class='row'>
    <div class='col-lg-6 col-12'>
        <h2 class='mb-4'>Visi</h2>
        <ul class=''>
          <li class='mb-2 '>
            Menjadi perusahaan yang tangguh dan terpercaya
            dalam memberikan perlindungan asuransi serta
            berperan aktif dalam pengembangan Industri
            Asuransi Nasional.
          </li>
        </ul>
    </div>

    <div class='col-lg-6 col-12'>
        <h2 class='mb-4'>Misi</h2>
        <ul class=''>
          <li class='mb-2'>
            Memenuhi kebutuhan pelanggan secara efektif dan
            inovatif.
          </li>
          <li class='mb-2'>
            Meningkatkan kompetensi dan produktifitas
            karyawan
          </li>
          <li class='mb-2'>
            Menjadikan perusahaan sebagai Badan Usaha yang
            membanggakan dan menguntungkan bagi stakeholder
          </li>
        </ul>
    </div>
  </div>

  <div class='mt-4'>
  <h2 class='mb-4'>Budaya Perseroan</h2>
    <ul class='list-unstyled'>
      <li class='mb-2'>
      </li>
      <ul class=' ml-lg-5 ml-0'>
        <li class='mb-2'>
          <b>Integrity</b> <br />
          Jujur, Konsisten, Obyektif, dan mengutamakan
          kepentingan perseroan.
        </li>
        <li class='mb-2'>
          <b>Competent</b> <br />
          Memiliki Kemampuan dan dapat diandalkan.
        </li>
        <li class='mb-2'>
          <b>Active</b> <br />
          Bertindak positif secara aktif dan proaktif.
        </li>
        <li class='mb-2'>
          <b>Responsible</b> <br />
          Bertanggungjawab atas setiap pelaksanaan
          pekerjaan.
        </li>
        <li class='mb-2'>
          <b>Effective & Efficient</b> <br />
          Memberikan hasil kerja terbaik sesuai sasaran
          kerja.
        </li>
      </ul>
    </ul>
  </div>
</section>
@endsection

@push('addon-style')
    <style>
      .visi-misi {
        /* background-color: ghostwhite; */
      }
    </style>
@endpush
                      