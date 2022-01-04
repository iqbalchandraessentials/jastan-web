@extends('layouts.about')

@section('title')
    Jasa Asuransi Tania
@endsection
@section('title-jumbotron')
    Struktur Organisasi
@endsection

@section('content')
    <a href="http://127.0.0.1:8000/images/img/Struktur-organisasi-Perseroan.webp" target="_blank" rel="noopener noreferrer">
      <img src='{{url('images/img/Struktur-organisasi-Perseroan.webp')}}'
      height='500'
      width='700' class="img-fluid"/>
    </a>
      <div class='struktur mt-4'>
        <h4 class="font-weight-bolder"> Dewan Komisaris</h4>
          <div class='row mt-4'>
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td>Komisaris Utama</td>
                  <td>: Ir. Alexander Maha, MM, QCRO</td>
                </tr>
                <tr>
                  <td>Komisaris</td>
                  <td>: Ir. Doni P. Gandamihardja, QCRO</td>
                </tr>
                <tr>
                  <td>Komisaris Independen</td>
                  <td>: Ir. Teten Djaka Triana, MM, QCRO</td>
                </tr>
                <tr>
                  <td>Komisaris Independen</td>
                  <td> : Ir. Slamet Solikhun, SE, QCRO</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class='struktur mt-4'>
          <h4 class="font-weight-bolder">Direksi</h4>
            <div class='row mt-4'>
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td>Direktur Utama</td>
                    <td>: Megang Kacaribu, SE AMRP</td>
                  </tr>
                  <tr>
                    <td>Direktur Keuangan & SDM</td>
                    <td> : Arifia Indah Liany ST, AAIK, AAAK, AIIS, QCRO</td>
                  </tr>
                  <tr>
                    <td>Direktur Teknik</td>
                    <td>: Hasbi Ashsiddiqi, S.Pi., AAIK, AIIS, CRGP</td>
                  </tr>
                  <tr>
                    <td>Direktur Pemasaran</td>
                    <td>: Hendrawan Siregar, SP, ANZIIF., CRMO</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>  
@endsection