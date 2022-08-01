  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.css')}}" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('template/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('template/css/responsive.css')}}" rel="stylesheet" />

<!-- header section strats -->
<div>
<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="/">
          <h3>
            Web
          </h3>
          <span>Pelaporan</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
          <ul class="navbar-nav  ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/laporansaya">Laporan saya <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
  
  <script type="text/javascript" src="{{asset('template/js/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('template/js/bootstrap.js')}}"></script>
