<style>
    .navbar .dropdown-menu div[class*="col"] {
      /* margin-bottom:1rem; */
    }

    .navbar .dropdown-menu {
      border:none;
      /* background-color:#0060c8!important; */
    }

    /* breakpoint and up - mega dropdown styles */
    @media screen and (min-width: 992px) {
      
      /* remove the padding from the navbar so the dropdown hover state is not broken */
    /* .navbar {
      padding-top:20px;
      padding-bottom:0px;
    } */

    /* remove the padding from the nav-item and add some margin to give some breathing room on hovers */
    .navbar .nav-item {
      padding:.5rem .5rem;
      margin:0 .25rem;
    }

    /* makes the dropdown full width  */
    .navbar .dropdown {position:static;}

    .navbar .dropdown-menu {
      width:100%;
      left:0;
      right:0;
    /*  height of nav-item  */
      top:65px;
      
      display:block;
      visibility: hidden;
      opacity: 0;
      transition: visibility 0.3s, opacity 0.3s linear;
      
    }
      
      /* shows the dropdown menu on hover */
    .navbar .dropdown:hover .dropdown-menu, .navbar .dropdown .dropdown-menu:hover {
      display:block;
      visibility: visible;
      opacity: 1;
      transition: visibility 0s, opacity 0.3s linear;
    }
      
      .navbar .dropdown-menu {
        border: 1px solid rgba(0,0,0,.15);
        background-color: rgb(245 245 245);
      }
    }
</style>



<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top "style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;" data-aos="fade-down">
<div class="container">
<a class="navbar-brand" href="/">
    <img src="{{ url('images/jastan.png')}}" alt="" class="img-fluid w-75"/>
  </a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarResponsive"
    aria-controls="navbarResponsive"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tentang Kami
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">          
          <div class="container">
            <div class="row">

            <div class="col-md-4 d-none d-lg-block">
            <div class="row">
            <div class="col-md-11 mt-2">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <b>PT Asuransi Jasa Tania Tbk</b>
                  <p class="text-justify lead" style="font-size : 14px">
                 Adalah asuransi umum yang menyajikan berbagai jenis produk diantaranya produk Asuransi Standar dan produk Asuransi Pengembangan.
                   <br><a href="/about" class="text-decoration-none small">pelajari lebih lanjut>>></a>
                  </p>
                </li>
              </ul>
            </div>
            
            <div class="col">
              <style>
               .vertical-line {
                 border-left: 2px solid cornflowerblue;
                 height: 150px;
               }
               </style>
                 <div class="vertical-line">
                 </div>
            </div>
            </div>
            </div>
              
              <!-- /.col-md-4  -->
              <div class="col-md-3">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="/about/riwayat-perseroan">Riwayat Perseroan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about/visi-misi">Visi & Misi Perseroan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about/struktur-organisasi">Struktur Organisasi</a>
                </li>
              </ul>
              </div>
              
              <!-- /.col-md-4  -->
              <div class="col-md-3">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="/about/management-perseroan">Manajemen Perseroan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about/pemegang-saham">Pemegang Saham</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about/anggaran-dasar">Anggaran Dasar</a>
                </li>
              </ul>
              </div>
              
              <!-- /.col-md-4  -->
              <div class="col-md-2">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="#">Penghargaan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Karir</a>
                </li>
              </ul>
              </div>
            </div>
          </div>
          <!--  /.container  -->
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bisnis
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              
              <!-- /.col-md-4  -->
              <div class="col-md-4">
                <ul class="nav flex-column ">
                <li class="nav-item">
                  <a href="/produk/standar/" class="text-decoration-none">
                  <b class="nav-link active">Produk Standar</b>
                  </a>
                </li>
                <div class="d-none d-lg-block">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">Asuransi Pengangkutan Barang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">Asuransi Kendaraan Bermotor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/produk/standar/penyimpanan-uang">Asuransi Penyimpanan Uang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">Asuransi Pengiriman Uang</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">Asuransi Proyek Konstruksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">Asuransi Gempa Bumi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">Asuransi Kebakaran</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">Asuransi PAR & IAR</a>
                  </li>
                </div>
              </ul>
              </div>
              <!-- /.col  -->
              <div class="col-md-3">
                <ul class="nav flex-column">
                <li class="nav-item">
                    <b class="nav-link active">Produk Pengembangan</b>
                </li>
                <div class="d-none d-lg-block">
                  <li class="nav-item">
                    <a class="nav-link" href="/about/pemegang-saham">JT CARE MICRO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">JT Care Cash Plan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">JT Travel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">JT OTO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">JT Griya</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about/anggaran-dasar">Jastan Trip</a>
                  </li>
                </div>
              </ul>
              </div>
              <div class="col-md-3">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <b class="nav-link active">Jalur Distribusi</b>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/distribusi/cabang">Kantor Cabang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about/pemegang-saham">Kantor Pemasaran</a>
                </li>
              </ul>
              </div>

              <div class="col-md-2 p-0">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <b class="nav-link active"><a href="/" class="text-dark text-decoration-none">Agen Rekan</a></b>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
            
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Investor
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              <div class="col-md-3 d-none d-lg-block">
                <div class="row">
                  <div class="col-10 mt-4">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                      <h2>INVESTOR</h2>
                    </li>
                  </ul>
                </div>
                <div class="col-2">
                  <style>
                   .vertical {
                     border-left: 2px solid cornflowerblue;
                     height: 100px;
                   }
                   </style>
                     <div class="vertical">
                     </div>
                </div>
                </div>
                </div>
            
                
              <!-- /.col-md-4  -->
              <div class="col">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <b class="nav-link active mt-3">Laporan Tahunan</b>
                </li>
              </ul>
              </div>
              <!-- /.col  -->
              <div class="col">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <b class="nav-link active mt-3">Laporan Keuangn</b>
                </li>
              </ul>
              </div>
              <!-- /.col  -->
              <div class="col-md-3 p-0">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <b class="nav-link active mt-3">Lembaga / Profesi Penunjang Pasar Modal</b>
                </li>
              </ul>
              </div>
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Media
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-4">

                <a href="">
                  <img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
                </a>
                <p class="text-white">Short image call to action</p>
                
              </div>
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->
        </div>
      </li>

    </ul>

  </div>
  </div>


</nav>


<script>
    $(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
  if ($(window).width() >= 980){  

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
    // do something here
  } 
});  
  
  

// document ready  
});
</script>