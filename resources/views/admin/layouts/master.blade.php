<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact layout-menu-collapsed " dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="vertical-menu-template">
<head>
	<meta charset="utf-8" />
	<title>Collapsed menu - Layouts | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<!-- Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.11.1/css/flag-icons.min.css" />
	<!-- Core CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
	<link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
	<link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
	<!-- Vendors CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
	<!-- Page CSS -->
	<!-- Helpers -->
	<script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
	<script src="{{asset('assets/js/config.js')}}"></script>
    @yield('header')
</head>
<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar  ">
		<div class="layout-container">
			<!-- Menu -->
			<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
				@include('admin.includes.sidebar')
			</aside>
			<!-- / Menu -->
			<!-- Layout container -->
			<div class="layout-page">
				<!-- Navbar -->
                @include('admin.includes.navbar')

				<!-- / Navbar -->
				<!-- Content wrapper -->
				<div class="content-wrapper">
					<!-- Content -->
					<div class="container-xxl flex-grow-1 container-p-y">
						<!-- Layout Demo -->
                        @yield('content')
						<!--/ Layout Demo -->
					</div>
					<!-- / Content -->
					<!-- Footer -->
					@include('admin.includes.footer')
					<!-- / Footer -->
					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>
		<!-- Overlay -->
		<div class="layout-overlay layout-menu-toggle"></div>
		<!-- Drag Target Area To SlideIn Menu On Small Screens -->
		<div class="drag-target"></div>
	</div>
	<!-- / Layout wrapper -->
	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->
	<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
	<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
	<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
	<script src="{{asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
	<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
	<script src="{{asset('assets/vendor/js/menu.js')}}"></script>
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
	<!-- endbuild -->
	<!-- Vendors JS -->
	<!-- Main JS -->
	<script src="{{asset('assets/js/main.js')}}"></script>
	<!-- Page JS -->
    @yield('footer')
</body>

</html>
