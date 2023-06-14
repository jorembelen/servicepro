<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="/assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/css/nouislider.min.css">
	<link rel="stylesheet" href="/assets/css/select2.min.css">
	<link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="/assets/css/ionicons.min.css">
	<link rel="stylesheet" href="/assets/css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>iJ – Job Board & Freelance Services Marketplace HTML Template</title>
</head>

<body>

	<!-- header -->
    @include('layouts.partials.header')
	<!-- end header -->

	<!-- main content -->
	<main class="main">
		
                @yield('content')
		
	</main>
	<!-- end main content -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer__content">
						<a href="/" class="footer__logo">
							<img src="/assets/img/logo.png" alt="">
						</a>

						<span class="footer__copyright">© <script>document.write(new Date().getFullYear())</script> servicepro<br> Created by <a href="#" target="_blank">JOREB</a></span>

						<nav class="footer__nav">
							<a href="{{ route('contacts') }}">Contacts</a>
							<a href="{{ route('faq') }}">FAQ</a>
							<a href="{{ route('privacy') }}">Privacy Policy</a>
						</nav>

						<button class="footer__back" type="button">
							<i class="icon ion-ios-arrow-round-up"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="/assets/js/jquery-3.4.1.min.js"></script>
	<script src="/assets/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/js/owl.carousel.min.js"></script>
	<script src="/assets/js/wNumb.js"></script>
	<script src="/assets/js/nouislider.min.js"></script>
	<script src="/assets/js/select2.min.js"></script>
	<script src="/assets/js/jquery.mousewheel.min.js"></script>
	<script src="/assets/js/jquery.mCustomScrollbar.min.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>