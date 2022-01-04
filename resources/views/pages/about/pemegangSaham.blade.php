@extends('layouts.about')

@section('title')
    Jasa Asuransi Tania
@endsection
@section('title-jumbotron')
    Pemegang Saham
@endsection

@section('content')

    <div class="row justify-content-center col-lg-12">
        <p class="text-justify gx-4 gx-lg-5">
            Komposisi kepemilikan saham per 30 September 2021, Pemegang Saham Pengendali Perseroan adalah Dana Pensiun Perkebunan (DAPENBUN) sebesar 77,39%.
        </p>
    </div>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><strong>No.</strong></th>
            <th><strong>Pemilik Saham</strong></th>
            <th ><strong>Jumlah Saham</strong></th>
            <th ><strong>Nominal Saham</strong></th>
            <th ><strong>Persentase</strong></th>
        </tr>
        </thead>
        <tbody>
          <tr>
              <td>1</td>
              <td>Dana Pensiun Perkebunan</td>
              <td>1.083.519.966</td>
              <td>108.351.996.600</td>
              <td>77,39%</td>
          </tr>
          <tr>
              <td  >2</td>
              <td>Direktur Perseroan</td>
              <td>263.300</td>
              <td>26.330.000</td>
              <td>&nbsp;0,01%</td>
          </tr>
          <tr>
              <td  >3</td>
              <td>Masyarakat</td>
              <td>316.216.734</td>
              <td>31.621.673.400</td>
              <td>22,60%</td>
          </tr>
          <tr>
              <td>&nbsp;</td>
              <td><strong>Jumlah</strong></td>
              <td><strong>1.400.000.000</strong></td>
              <td><strong>140.000.000.000</strong></td>
              <td><strong>100,00%</strong></td>
          </tr>
      </tbody>
      </table>
    </div>


@endsection