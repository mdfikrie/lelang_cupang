
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Lupa Password</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="https://via.placeholder.com/50" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('templates/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset("templates/css/fonts.min.css") }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('templates/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('templates/css/atlantis.css') }}">
	<style>
		.images{
			background-image: url("{{asset('gambar/banner/bg-auth.jpg')}}")!important;
			background-repeat: no-repeat !important;
			background-size: cover !important;
			background-position: center;
		}
	</style>
</head>
<body class="login">
	<div class="wrapper wrapper-login wrapper-login-full p-0">
		<div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient images">
			<h1 class="title fw-bold text-white mb-3">SISTEM LELANG CUPANG</h1>
            <p class="subtitle text-white op-7">Ayo bergabung dengan komunitas kami untuk masa depan yang lebih baik</p>
		</div>
		<div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
			<div class="container container-login container-transparent animated fadeIn">
				<h3 class="text-center">Masukkan email anda!</h3>
				<form action="/forgot-password" method="POST">
				@csrf
					<div class="login-form">
						<div class="form-group">
							<label for="email" class="placeholder"><b>Email</b></label>
							<input name="email" type="email" class="form-control" >
							@error('email')
							<div class="text-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group form-action-d-flex mb-3">
							<button type="submit" class="btn btn-secondary col-md-12 float-right mt-3 mt-sm-0 fw-bold">Kirim email pemulihan</button>
						</div>
					</div>
					<div class="login-account">
						<span class="msg">Kembali ke halaman </span>
						<a href="/" id="show-signup" class="link">Login</a>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="{{ asset('templates/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('templates/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('templates/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('templates/js/core/bootstrap.min.js') }}"></script>
	<script src="{{ asset('templates/js/atlantis.min.js') }}"></script>
</body>
</html>