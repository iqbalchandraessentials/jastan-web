@extends('layouts.app')

@section('title')
    Jasa Asuransi Tania
@endsection

@section('content')

<div class="page-content page-home">
    <section class="store-carousel mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto" data-aos="zoom-in">
                    <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#storeCarousel" data-slide-to="1"></li>
                                <li data-target="#storeCarousel" data-slide-to="2"></li>
                                <li data-target="#storeCarousel" data-slide-to="3"></li>
                                <li data-target="#storeCarousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                             <div class="carousel-item active">
                                    <img src="{{url('images/img/7.webp')}}" class="d-block rounded rounded-lg w-100" alt="Carousel Image"/>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('https://jastan.co.id/storage/img/products/1611426746ak.webp')}}" class="d-block rounded w-100" alt="Carousel Image"/>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('https://jastan.co.id/storage/img/products/1611427074img.webp')}}" class="d-block rounded w-100" alt="Carousel Image"/>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('https://jastan.co.id/storage/img/products/1611426612akb.webp')}}" class="d-block rounded-3 w-100" alt="Carousel Image"/>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{url('https://jastan.co.id/storage/img/products/1611426868img.webp')}}" class="d-block rounded w-100" alt="Carousel Image"/>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- end carousel --}}


        <section class="short-about" data-aos="fade-up" style="margin-top: 4rem; margin-bottom: 4rem;">
            <div class="col-lg-9 col-md-12 m-auto">
            <div class="container">
                <div class="row">
                    
                <div class="col-lg-7 col-md-12" >
                    {{-- <div class="text-center text-lg-left">
                        <img src="{{url('images/jastan.png')}}" alt="" srcset="" class="image-fluid">
                    </div> --}}
                        <p class="mt-3 text-justify">
                        PT Asuransi Jasa Tania Tbk (Asuransi Jastan) adalah asuransi umum yang menyajikan berbagai jenis produk Asuransi Standar diantaranya Asuransi Kebakaran, Kendaraan Bermotor, Rekayasa, Pengangkutan Barang, Surety Bond, Miscellaneous, dan Kesehatan.
                            Asuransi Jastan juga menyajikan produk Pengembangan seperti Asuransi JT Oto, JT Griya, Ternak, Tanaman Perkebunan, Askes JT Care Cash Plan, Askes JT Care Micro, dan Tanggung Gugat Pelayanan Kesehatan Rumah Sakit
                        </p>    
                </div>

                    <div class="col-lg-5 d-lg-block d-none">
                        <img src="{{url('images/img/opening.png')}}" alt="" srcset="" class="img-fluid w-75">
                    </div>
                </div>
            </div>
            </div>
        </section>
        



        <section class="our-product mt-3" data-aos="fade-up" style="margin-bottom: 8rem;">
            <div class="m-auto col-lg-8 col-12">
                <div class="container">
                    <h1 class="text-center font-weight-bolder mb-3">PRODUK</h1>
                    <div class="container m-auto">
                        <div class="row">
                            <div class="col-6 p-3 p-lg-5" data-aos="fade-left" data-aos-delay="200">
                                <a href="/produk/standar" class="text-decoration-none">
                                    <div class="up-up p-lg-3 p-0 text-dark">
                                        <img src="{{url('images/img/standard.png')}}" alt="" srcset="" class=" img-fluid p-2">
                                        <h5 class="font-weight-bolder">PRODUK STANDAR</h5>
                                        <P class="text-justify d-none d-lg-block ">Asuransi Kebakaran, Kendaraan Bermotor, Rekayasa, Pengangkutan Barang, Surety Bond, Miscellaneous, dan Kesehata</P>
                                    </div>
                                </a>
                                </div>
                            <div class="col-6 p-3 p-lg-5" data-aos="fade-right" data-aos-delay="200">
                            <a href="/produk/standar" class="text-decoration-none">
                                <div class="up-up p-lg-3 p-0 text-dark">
                                <img src="{{url('images/img/pengembangan.png')}}" alt="" srcset="" class=" img-fluid p-2">
                                <h5 class="font-weight-bolder">PRODUK PENGEMBANGAN</h5>
                                <P class="text-justify d-none d-lg-block">Asuransi Kebakaran, Kendaraan Bermotor, Rekayasa, Pengangkutan Barang, Surety Bond, Miscellaneous, dan Kesehata</P>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h3 class="font-weight-bolder mb-3"><u>Berita</u></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up"
                            data-aos-delay="">
                            <a class="component-products d-block" href=" ">
                                <div class="products-thumbnail">
                                    <div class="products-image" style=" backgoround-color: #eee ">
                                    </div>
                                </div>
                                <div class="products-text text-capitalize">
                                {{Str::words('Peringatan HUT 42 PT Asuransi Jasa Tania Tbk', '7')}} 
                                </div>
                                <div class="products-price">
                                    See More
                                </div>
                            </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up"
                            data-aos-delay="">
                            <a class="component-products d-block" href=" ">
                                <div class="products-thumbnail">
                                    <div class="products-image" style=" backgoround-color: #eee ">
                                    </div>
                                </div>
                                <div class="products-text text-capitalize">
                                {{Str::words('Peringatan HUT 42 PT Asuransi Jasa Tania Tbk', '7')}} 
                                </div>
                                <div class="products-price">
                                    See More
                                </div>
                            </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up"
                            data-aos-delay="">
                            <a class="component-products d-block" href=" ">
                                <div class="products-thumbnail">
                                    <div class="products-image" style=" backgoround-color: #eee ">
                                    </div>
                                </div>
                                <div class="products-text text-capitalize">
                                {{Str::words('Peringatan HUT 42 PT Asuransi Jasa Tania Tbk', '7')}} 
                                </div>
                                <div class="products-price">
                                    See More
                                </div>
                            </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up"
                            data-aos-delay="">
                            <a class="component-products d-block" href=" ">
                                <div class="products-thumbnail">
                                    <div class="products-image" style=" backgoround-color: #eee ">
                                    </div>
                                </div>
                                <div class="products-text text-capitalize">
                                {{Str::words('Peringatan HUT 42 PT Asuransi Jasa Tania Tbk', '7')}} 
                                </div>
                                <div class="products-price">
                                    See More
                                </div>
                            </a>
                    </div>
                  
                </div>
            </div>
        </section>


        <section class="store-new-products mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h3 class="font-weight-bolder mb-3"><u>Pengumuman</u></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up"
                            data-aos-delay="">
                            <a class="component-products d-block" href=" ">
                                <div class="products-thumbnail">
                                    <div class="products-image" style=" backgoround-color: #eee ">
                                    </div>
                                </div>
                                <div class="products-text text-capitalize">
                                {{Str::words('Peringatan HUT 42 PT Asuransi Jasa Tania Tbk', '7')}} 
                                </div>
                                <div class="products-price">
                                    See More
                                </div>
                            </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up"
                            data-aos-delay="">
                            <a class="component-products d-block" href=" ">
                                <div class="products-thumbnail">
                                    <div class="products-image" style=" backgoround-color: #eee ">
                                    </div>
                                </div>
                                <div class="products-text text-capitalize">
                                {{Str::words('Peringatan HUT 42 PT Asuransi Jasa Tania Tbk', '7')}} 
                                </div>
                                <div class="products-price">
                                    See More
                                </div>
                            </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up"
                            data-aos-delay="">
                            <a class="component-products d-block" href=" ">
                                <div class="products-thumbnail">
                                    <div class="products-image" style=" backgoround-color: #eee ">
                                    </div>
                                </div>
                                <div class="products-text text-capitalize">
                                {{Str::words('Peringatan HUT 42 PT Asuransi Jasa Tania Tbk', '7')}} 
                                </div>
                                <div class="products-price">
                                    See More
                                </div>
                            </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up"
                            data-aos-delay="">
                            <a class="component-products d-block" href=" ">
                                <div class="products-thumbnail">
                                    <div class="products-image" style=" backgoround-color: #eee ">
                                    </div>
                                </div>
                                <div class="products-text text-capitalize">
                                {{Str::words('Peringatan HUT 42 PT Asuransi Jasa Tania Tbk', '7')}} 
                                </div>
                                <div class="products-price">
                                    See More
                                </div>
                            </a>
                    </div>
                  
                </div>
            </div>
        </section>
    </div>

    <a href="https://wa.me/6285778612900?text=Hallo%20Bang%20Ganteng%20se%20Jasa Tania" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    
    
    @endsection
    
@push('addon-style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <style>
        .our-product .col-6:hover .up-up {
            transform: translateY(-8px);
            transition-duration: 1s;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
@endpush