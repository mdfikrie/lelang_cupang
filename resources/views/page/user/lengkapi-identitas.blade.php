
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
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
			<!-- <div class="container container-login container-transparent animated fadeIn"> -->
            <div class="row">
						<div class="wizard-container wizard-round col-md-12">
							<div class="wizard-header text-center">
								<h3 class="wizard-title"><b>Lengkapi Identitas</b></h3>
							</div>
							<form novalidate="novalidate" action="{{url('/post-identitas')}}" method="post">
                            @csrf
								<div class="wizard-body">
									<div class="tab-content">
										<div class="tab-pane active" id="telp">
											<div class="row">
												<div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>No. Telp</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">+62</span>
                                                            </div>
                                                            <input type="text" class="form-control" name="telp" aria-describedby="basic-addon1" required>
                                                        </div>
                                                    </div>
                                                    
                                                    <input name="id" type="text" class="form-control" value="{{$user->id}}" hidden>
													

													<div class="form-group">
														<label>Kota :</label>
														<input name="kota" type="text" class="form-control" required>  
                                                       
													</div>
												</div>

												<div class="col-md-12">
                                                    <div class="form-group">
														<label>Alamat Lengkap :</label>
														<textarea name="alamat" class="form-control" rows="5" required></textarea>
                                                       
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="wizard-action">
									<div class="pull-right">
										<button class="btn btn-danger" type="submit">Finish</button>
										
									</div>
								</div>
							</form>
						</div>
					<!-- </div> -->
			</div>
		</div>
	</div>
	<script src="{{ asset('templates/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('templates/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('templates/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('templates/js/core/bootstrap.min.js') }}"></script>
	<script src="{{ asset('templates/js/atlantis.min.js') }}"></script>
    <!-- Select2 -->
	<script src="{{ asset('templates/js/plugin/select2/select2.full.min.js') }}"></script>
	<!-- Bootstrap Wizard -->
	<script src="{{ asset('templates/js/plugin/bootstrap-wizard/bootstrapwizard.js') }}"></script>
	<!-- jQuery Validation -->
	<script src="{{ asset('templates/js/plugin/jquery.validate/jquery.validate.min.js') }}"></script>
	<!-- Atlantis JS -->
    <script>
		// Code for the Validator
		var $validator = $('.wizard-container form').validate({
			validClass : "success",
			highlight: function(element) {
				$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			success: function(element) {
				$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			}
		});
	</script>
</body>
</html>