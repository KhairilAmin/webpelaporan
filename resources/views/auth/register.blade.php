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
    @include('layout.navbar')
  </div>

  <!-- login section -->

  <section class="login_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              SUDAH PUNYA AKUN?
            </h3>
            <a href="/login">
              LOGIN NOW
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="login_form">
            <h5>
              Login Now
            </h5>
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
              <div class="col-md-6">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                  </div>
              </div>

              <div class="form-group row">
              <label for="umur" class="col-md-4 col-form-label text-md-right">{{ __('Umur') }}</label>
              <div class="col-md-6">
                      <input id="umur" type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}" autocomplete="umur" autofocus>

                      @error('umur')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
              <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
              <div class="col-md-6">
                      <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" autocomplete="alamat" autofocus>

                      @error('alamat')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Register') }}
                      </button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end login section -->

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

</body>

</html> 