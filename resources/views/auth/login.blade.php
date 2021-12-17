<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hệ thống quản lí giải đấu</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
	<div class="container-fluid page-body-wrapper full-page-wrapper">
	  <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
		<div class="row flex-grow">
		  <div class="col-lg-6 d-flex align-items-center justify-content-center">
			<div class="auth-form-transparent text-left p-3">
				<div class="brand-logo">
					<img src="../../images/logo.svg" alt="logo">
				</div>
			  	<h4>Trang quản trị</h4>

                <form class="pt-3" method="POST" action="{{ route('login') }}">
                    @csrf
				<div class="form-group">
				  <label for="email">{{ __('E-Mail Address') }}</label>
				  <div class="input-group">
					<div class="input-group-prepend bg-transparent">
					  <span class="input-group-text bg-transparent border-right-0">
						<i class="mdi mdi-account-outline text-primary"></i>
					  </span>
					</div>
				  
                    <input id="email" type="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
				</div>

				<div class="form-group">
				  <label for="password">Mật khẩu</label>
				  <div class="input-group">
					<div class="input-group-prepend bg-transparent">
					  <span class="input-group-text bg-transparent border-right-0">
						<i class="mdi mdi-lock-outline text-primary"></i>
					  </span>
					</div>
				  
                    <input id="password" type="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
				</div>

				<div class="my-2 d-flex justify-content-between align-items-center">

				  <div class="form-check">
					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
				  </div>

				</div>

				<div class="my-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
				</div>

				<div class="mb-2 d-flex">
				  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
					<i class="mdi mdi-facebook mr-2"></i>Facebook
				  </button>
				  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
					<i class="mdi mdi-google mr-2"></i>Google
				  </button>
				</div>

				<div class="text-center mt-4 font-weight-light">
				  Chưa có tài khoản? <a href="register.html" class="text-primary">Đăng kí</a>
				</div>
			  </form>
			</div>
		  </div>

			<div class="col-lg-6 login-half-bg d-flex flex-row">
				<p class="text-white font-weight-medium text-center flex-grow align-self-end"></p>
			</div>
		</div>
	  </div>
	  <!-- content-wrapper ends -->
	</div>
	<!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <!-- endinject -->
</body>

</html>