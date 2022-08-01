<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Joson</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.css')}}" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('template/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('template/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    @include('layout.navbar')
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        PELAPORAN KERUSAKAN FASILITAS
                      </h1>
                      <a href="">
                        Lihat Laporan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        LAPORAN KEHILANGAN
                      </h1>
                      <a href="">
                        Lihat Laporan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        LAPORAN KECELAKAAN
                      </h1>
                      <a href="">
                        Lihat Laporan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- special section -->

  <section class="special_section">
    <div class="container">
      <div class="special_container">
        <div class="box b1">
          <div class="detail-box">
            <h4>
              BUAT <br />
              LAPORAN FASILITAS
            </h4>
            <a href="">
              Buat Laporan!
            </a>
          </div>
        </div>
        <div class="box b2">
          <div class="detail-box">
            <h4>
              BUAT<br />
              LAPORAN KEHILANGAN
            </h4>
            <a href="">
              Buat Laporan!
            </a>
          </div>
        </div>
        <div class="box b3">
          <div class="detail-box">
            <h4>
              BUAT <br />
              LAPORAN KECELAKAAN?
            </h4>
            <a href="">
              Buat Laporan!
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end special section -->

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="side_img">
      <img src="images/side-img.png" alt="" />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="{{asset('gresik.jpg')}}" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
                Apa Itu Web Pelaporan ?
              </h3>
              <p>
                Web pelaporan adalah web dimana masyarakat 
                dapat melaporkan masalah masalah yang terdapat 
                pada lingkungan mereka , seperti : kerusakan fasilitas umum,
                 laporan kehilangan, dan slaporan kecelakaan
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 2021 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  
  </footer>

   
  <footer class="container-fluid footer_section">
  
      <p>
        Distributed By 
        <a href="https://themewagon.com/">Themewagon</a>
      </p>
  
  </footer>
 
  <!-- footer section -->

  <script type="text/javascript" src="{{asset('template/js/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/js/bootstrap.js')}}"></script>
  @include('sweetalert::alert')


</body>

</html>