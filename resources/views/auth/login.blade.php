<!DOCTYPE html>
<html lang="en">

<!-- [Head] start -->
<head>
  <title>Login | SQUO</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- [Favicon] icon -->
  <link rel="icon" href="{{ asset('squo/images/favicon.svg') }}" type="image/x-icon"> <!-- [Google Font] Family -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="{{ asset('squo/fonts/tabler-icons.min.css') }}" >
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="{{ asset('squo/fonts/feather.css') }}" >
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="{{ asset('squo/fonts/fontawesome.css') }}" >
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="{{ asset('squo/fonts/material.css') }}" >
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="{{ asset('squo/css/style.css') }}" id="main-style-link" >
  <link rel="stylesheet" href="{{ asset('squo/css/style-preset.css') }}" >

</head>
<!-- [Head] end -->

<!-- [Body] Start -->
<body>
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <div class="auth-main">
    <div class="auth-wrapper v3">
      <div class="auth-form">
        <div class="auth-header">
          <a href="#"><img src="{{ asset('squo/images/logo-dark.svg') }}" alt="img"></a>
        </div>
        <div class="card my-5">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
              <h3 class="mb-0"><b>Login</b></h3>
            </div>

            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group mb-3">
                  <label for="email" class="form-label">Correo</label>
                  
                  <input 
                      type="email" 
                      id="email"
                      name="email"
                      class="form-control" 
                      placeholder="Email Address"
                      value="{{ old('email') }}"
                      required 
                      autofocus 
                      autocomplete="username"
                  >

                  @error('email')
                      <div class="text-danger mt-2">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group mb-3">
                <label for="password" class="form-label">Contraseña</label>

                <input 
                    type="password" 
                    id="password"
                    name="password"
                    class="form-control"
                    placeholder="Ingresa tu contraseña"
                    required 
                    autocomplete="current-password"
                >

                @error('password')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
              </div>

              <div class="d-flex mt-1 justify-content-between">
                <div class="form-check">
                  <input class="form-check-input input-primary" type="checkbox"  id="remember_me" name="remember"  checked="">
                  <label for="remember_me" class="form-check-label text-muted" for="customCheckc1">Recordarme</label>
                </div>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary">
                    Iniciar sesión
                </button>
              </div>
              <div class="saprator mt-3">
                <span>Login with</span>
              </div>
              <div class="row">
                <div class="col-4">
                  <div class="d-grid">
                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                      <img src="{{ asset('squo/images/authentication/google.svg') }}" alt="img"> <span class="d-none d-sm-inline-block"> Google</span>
                    </button>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-grid">
                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                      <img src="{{ asset('squo/images/authentication/twitter.svg') }}" alt="img"> <span class="d-none d-sm-inline-block"> Twitter</span>
                    </button>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-grid">
                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                      <img src="{{ asset('squo/images/authentication/facebook.svg') }}" alt="img"> <span class="d-none d-sm-inline-block"> Facebook</span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="auth-footer row">
          <!-- <div class=""> -->
            <div class="col my-1">
              <p class="m-0">Copyright © <a href="#">SQUO</a></p>
            </div>
            <div class="col-auto my-1">
              <ul class="list-inline footer-link mb-0">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#">Contact us</a></li>
              </ul>
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <!-- Required Js -->
  <script src="{{ asset('squo/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('squo/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('squo/js/plugins/bootstrap.min.js') }}"></script>
  <script src="{{ asset('squo/js/fonts/custom-font.js') }}"></script>
  <script src="{{ asset('squo/js/fonts/custom-ant-icon.js') }}"></script>
  <script src="{{ asset('squo/js/pcoded.js') }}"></script>
  <script src="{{ asset('squo/js/plugins/feather.min.js') }}"></script>
     
  <script>
    layout_change('light');
  </script>
     
  <script>
    change_box_container('false');
  </script>
    
  <script>
    layout_rtl_change('false');
  </script>
   
  <script>
    preset_change('preset-1');
  </script>
   
  <script>
    font_change('Public-Sans');
  </script>
  
 
</body>
<!-- [Body] end -->

</html>