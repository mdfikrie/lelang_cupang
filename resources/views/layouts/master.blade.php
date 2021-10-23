<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('title')</title>
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
	@livewireStyles
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('templates/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('templates/css/atlantis.css') }}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="{{url('/beranda')}}" class="logo">
					<img src="{{asset('images/logo.png')}}" width="150" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<!-- <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button> -->
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header --><!-- Navbar Header -->
<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

</div><!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
				@if(Auth()->user()->gambar == null )
					<img src="{{asset('images/user.png')}}" alt="Logo" class="avatar-img rounded-circle">
				@else
					<img src="{{asset('gambar/profile/'. auth()->user()->gambar)}}" alt="Logo" class="avatar-img rounded-circle">
				@endif
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>{{auth()->user()->username}}
							@if(auth()->user()->role == 'admin')
								<span class="user-level">Administrator</span>
							@else
								<span class="user-level">User</span>
							@endif
						
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="#" data-toggle="modal" data-target="#logoutModal">
									<span class="link-collapse">Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav nav-primary">
                @if(auth()->user()->role == 'admin')
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Admin</h4>
                </li>
				<li class="nav-item {{Request::is('dashboard*') ? 'active' : ''}}">
					<a href="{{ route('dashboard') }}">
						<i class="fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-item {{Request::is('data-user*') ? 'active' : ''}}">
					<a href="{{ route('data-user') }}">
						<i class="fas fa-users"></i>
						<p>Data User</p>
					</a>
				</li>
				<li class="nav-item {{Request::is('data-lelang*') ? 'active' : ''}}">
					<a href="{{ route('data-lelang') }}">
						<i class="fas fa-fish"></i>
						<p>Data Lelangan User</p>
					</a>
				</li>
				<li class="nav-item {{Request::is('pesan-pengaduan*') ? 'active' : ''}}">
					<a href="{{ route('pesan-pengaduan') }}">
						<i class="fas fa-comment"></i>
						<p>Pesan Pengaduan</p>
					</a>
				</li>
				<li class="nav-item {{Request::is('data-galery*') ? 'active' : ''}}">
					<a href="{{ route('data-galery') }}">
						<i class="fas fa-images"></i>
						<p>Data Galery</p>
					</a>
				</li>
				@endif
				<li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">User</h4>
                </li>
                
                <li class="nav-item {{Request::is('profile*') ? 'active' : ''}}">
					<a href="{{ route('profile') }}">
						<i class="fas fa-user"></i>
						<p>Profile</p>
					</a>
				</li>
				<li class="nav-item {{ Request::is('beranda*')?'active':'' }}">
					<a href="{{ route('beranda') }}" aria-expanded="false">
						<i class="fas fa-home"></i>
						<p>Beranda</p>
					</a>
				</li>

				<li class="nav-item {{Request::is('lelangan*')?'active':''}} submenu">
					<a data-toggle="collapse" href="#submenu" class="" aria-expanded="false">
						<i class="fas fa-fish"></i>
						<p>Lelangan</p>
						<span class="caret"></span>
					</a>
					<div class="collapse {{Request::is('lelangan*')?'show':'hide'}}" id="submenu">
						<ul class="nav nav-collapse">
							<li class="">
								<a href="{{route('lelangan')}}" class="collapsed" aria-expanded="false">
									<span class="sub-item">Lelangan Saya</span>
								</a>
							</li>
							<li class="">
								<a href="{{route('lelangan-close')}}" class="collapsed" aria-expanded="false">
									<span class="sub-item">Hasil Lelangan</span>
								</a>
							</li>
						</ul>
					</div>
				</li>

				<li class="nav-item {{ Request::is('keranjang*')?'active':'' }}">
					<a href="{{ route('keranjang') }}" aria-expanded="false">
						<i class="fas fa-shopping-cart"></i>
						<p>Keranjang</p>
					</a>
				</li>
				
				<li class="nav-item {{ Request::is('history*')?'active':'' }}">
					<a href="{{ route('history') }}" aria-expanded="false">
						<i class="fas fa-history"></i>
						<p>History Bid</p>
					</a>
				</li>
				<li class="nav-item {{ Request::is('galery*')?'active':'' }}">
					<a href="{{ route('galery') }}" aria-expanded="false">
						<i class="fas fa-image"></i>
						<p>Galery</p>
					</a>
				</li>
				<li class="nav-item {{ Request::is('chat*')?'active':'' }}">
					<a href="{{ route('chat') }}" aria-expanded="false">
						<i class="fas fa-comments"></i>
						<p>Chat</p>
					</a>
				</li>
				<li class="nav-item {{ Request::is('pengaduan*')?'active':'' }}">
					<a href="{{ route('pengaduan') }}" aria-expanded="false">
						<i class="fas fa-clipboard"></i>
						<p>Pengaduan</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" data-toggle="modal" data-target="#logoutModal">
						<i class="fas fa-sign-out-alt"></i>
						<p>Logout</p>
					</a>
				</li>
				
				
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Yakin mau keluar?	</div>
        <div class="modal-footer">
			<a class="btn btn-primary" href="{{url('/logout')}}">Ya</a>
          <button class="btn btn-danger" type="button" data-dismiss="modal">Tidak</button>
        </div>
      </div>
    </div>
  </div>

   
@yield('content')

<!--   Core JS Files   -->
<script src="{{ asset('templates/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('templates/js/core/popper.min.js') }}"></script>
<script src="{{ asset('templates/js/core/bootstrap.min.js') }}"></script>
	<!-- jQuery UI -->
<script src="{{ asset('templates/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('templates/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
	<!-- Bootstrap Toggle -->
<script src="{{ asset('templates/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
	<!-- jQuery Scrollbar -->
<script src="{{ asset('templates/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

	<!-- Datatables -->
    <script src="{{ asset('templates/js/plugin/datatables/datatables.min.js') }}"></script>
	<!-- Atlantis JS -->
    <script src="{{ asset('templates/js/atlantis.min.js') }}"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
	<!-- <script>
		//== Class definition
		var SweetAlert2Demo = function() {

			//== Demos
			var initDemos = function() {
				//== Sweetalert Demo 1
				
				$('#alert_demo_3_3').click(function(e) {
					swal("Good job!", "You clicked the button!", {
						icon : "success",
						buttons: {        			
							confirm: {
								className : 'btn btn-success'
							}
						},
					});
				});
				$('#alert_demo_7').click(function(e) {
					swal({
						title: 'Are you sure?',
						text: "You won't be able to revert this!",
						type: 'warning',
						buttons:{
							confirm: {
								text : 'Yes, delete it!',
								className : 'btn btn-success'
							},
							cancel: {
								visible: true,
								className: 'btn btn-danger'
							}
						}
					}).then((Delete) => {
						if (Delete) {
							swal({
								title: 'Deleted!',
								text: 'Your file has been deleted.',
								type: 'success',
								buttons : {
									confirm: {
										className : 'btn btn-success'
									}
								}
							});
						} else {
							swal.close();
						}
					});
				});
			};

			return {
				//== Init
				init: function() {
					initDemos();
				},
			};
		}();
		//== Class Initialization
		jQuery(document).ready(function() {
			SweetAlert2Demo.init();
		});
	</script> -->
	@yield('footer')
	@livewireScripts
</body>
</html>