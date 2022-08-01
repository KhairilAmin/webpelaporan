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

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        @include('layout.navbar')
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
                @yield('judul')
              </h3>
              <p>
                @yield('rincian')
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-form">
            <h5>
              @yield('judul')
            </h5>
              @yield('konten')
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

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
  <script type="text/javascript" src="{{('template/js/bootstrap.js')}}"></script>
  <!-- Include this in your blade layout -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>

</html>