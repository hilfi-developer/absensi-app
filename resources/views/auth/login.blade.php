<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aplikasi Absensi Sekolah</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css')  }}">
  <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/fontawesome/css/all.min.css') }} ">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla/dist/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/dist/assets/css/components.css') }}">

  @stack('css_vendors')
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{ asset('img/EABS.png') }}" alt="logo" width="100" class="shadow-light">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" tabindex="1" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        @if (Route::has('password.request'))
                            <a class="text-small" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="simple-footer">
              Copyright 2022 &copy; Hilfideveloper 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

   <!-- General JS Scripts -->
  <script src="{{ asset('stisla/dist/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('stisla/dist/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('stisla/dist/assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('stisla/dist/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('stisla/dist/assets/js/stisla.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('stisla/dist/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('stisla/dist/assets/js/custom.js') }}"></script>
</body>
</html>