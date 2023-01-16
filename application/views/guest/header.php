<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>BP2M PCR</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assets/');?>img/logo/logoBP2M.png" rel="icon">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/');?>vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/');?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url('assets/');?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/');?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/');?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- datatable -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
	

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets/');?>css/style.css" rel="stylesheet">
	<!--
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
-->
	<!-- =======================================================
  * Template Name: Eterna - v4.10.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Top Bar ======= -->
	<section id="topbar" class="d-flex align-items-center">
		<div class="container d-flex justify-content-center justify-content-md-between">
			<div class="contact-info d-flex align-items-center">
				<i class="bi bi-globe d-flex align-items-center"><a href="https://pcr.ac.id/" target="blank">Politeknik
						Caltex Riau</a></i>
				<i class="bi bi-pie-chart-fill d-flex align-items-center ms-4"><a href="https://bp2m.pcr.ac.id/"
						target="blank">BP2M Management System</a></i>
			</div>
			<div class="social-links d-none d-md-flex align-items-center">
				<a href="https://www.facebook.com/Politeknik.Caltex.Riau/" target="blank" class="facebook"><i
						class="bi bi-facebook"></i></a>
				<a href="https://www.instagram.com/politeknikcaltexriau/?hl=en" target="blank" class="instagram"><i
						class="bi bi-instagram"></i></a>
				<a href="https://twitter.com/policaltexriau?lang=en" target="blank" class="twitter"><i
						class="bi bi-twitter"></i></a>
				<a href="https://www.youtube.com/c/PoliteknikCaltexRiauOfficial" target="blank" class="youtube"><i
						class="bi bi-youtube"></i></i></a>
			</div>
		</div>
	</section>

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex justify-content-between align-items-center">

			<div class="logo">
				<!-- <h1><a href="index.html">Eterna</a></h1> -->
				<!-- Uncomment below if you prefer to use an image logo -->

				<a href="https://pcr.ac.id/"><img src="<?= base_url('assets/');?>img/logo/logoPCR.png" alt="" class=""></a>
				<a href="<?= base_url('guest');?>"><img src="<?= base_url('assets/');?>img/logo/logoBP2M.png" alt="" class="img-fluid"></a>
			</div>

			<nav id="navbar" class="navbar">
				<ul>
					<!-- a class active ? -->
					<li><a class="" href="<?= base_url('guest'); ?>">Home</a></li>
					<li><a href="<?= base_url('guest/profil'); ?>">Profil BP2M</a></li>
					<li><a href="<?= base_url('guest/penelitian'); ?>">Penelitian</a></li>
					<li><a href="<?= base_url('guest/pengabdian'); ?>">Pengabdian</a></li>
					<li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="<?= base_url('guest/jurnalpcr'); ?>">Jurnal PCR</a></li>
							<li><a href="https://abecindonesia.org/iabec/index.php/iabec" target="blank">IABEC</a></li>
						</ul>
					</li>
					<li><a href="<?= base_url('guest/dokumen'); ?>">Dokumen</a></li>
					<li><a href="<?= base_url('guest/sentrahki'); ?>">Sentra HKI</a></li>
					<li><a href="<?= base_url('guest/pertanyaan'); ?>">Ajukan Pertanyaan</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->