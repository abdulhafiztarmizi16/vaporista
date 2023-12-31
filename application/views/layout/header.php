<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<title>Vaporista</title>

	<!-- Favicons -->
	<link rel="icon" href="<?= base_url('assets/') ?>img/icon.png" type="image/x-icon">
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>img/icon.png" type="image/x-icon">

	<link href="<?= base_url('assets/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets/') ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--external css-->
	<link href="<?= base_url('assets/') ?>lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<!-- Custom styles for this template -->
	<link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/style-responsive.css" rel="stylesheet">
	<script src="<?= base_url('assets/') ?>lib/chart-master/Chart.js"></script>
	<link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

	<link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	<!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
	<section id="container-fluid">
		<!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
		<!--header start-->
		<header class="header black-bg">
			<?php if ($user['role'] == 'Admin') : ?>
				<div class="sidebar-toggle-box">
					<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
				</div>
			<?php endif; ?>
			<!--logo start-->
			<a href="<?= site_url('/') ?>" class="logo"><b>VAPO<span>RISTA</span></b></a>
			<!--logo end-->
			<div class="nav notify-row" id="top_menu">
				<!--  notification start -->
				<ul class="nav top-menu">
					<!-- settings start -->
					<li class="dropdown">
						<?php
						if ($user['role'] == 'User') {
						?>
							<!-- Nav Item - Alerts -->
					<li class="nav-item dropdown no-arrow mx-1">
						<a class="nav-link dropdown-toggle" href="<?= base_url('Profil/pembelian'); ?>">
							<i class="fas fa-history fa-fw"></i>
							<!-- Counter - Alerts -->
							<span class="badge badge-danger badge-counter">
								!
							</span>
						</a>
						<!-- Dropdown - Alerts -->
					</li>
					<li class="nav-item dropdown no-arrow mx-1">
						<a class="nav-link dropdown-toggle" href="<?= base_url('Profil/detail'); ?>">
							<i class="fas fa-shopping-cart fa-fw"></i>
							<!-- Counter - Alerts -->
							<span class="badge badge-danger badge-counter">
								<?= $jlh ?>
							</span>
						</a>
						<!-- Dropdown - Alerts -->
					</li>

				<?php } ?>
				</li>
				<!-- settings end -->
				<!-- inbox dropdown start-->
			</div>
			<div class="top-menu">
				<ul class="nav pull-right top-menu">
					<li><a class="logout" href="<?= site_url('auth/logout') ?>">Logout</a></li>
				</ul>
			</div>
		</header>
		<!--header end-->
		<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
		<!--sidebar start-->
		<?php if ($user['role'] == 'Admin' || $user['role'] == 'Superadmin') : ?>
			<aside>
				<div id="sidebar" class="nav-collapse">
					<!-- sidebar menu start -->
					<ul class="sidebar-menu" id="nav-accordion">
						<p class="centered"><img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="img-circle" width="60"></a></p>
						<h2 class="centered"><span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span></h2>
						<li class="mt">
							<a href="<?= site_url('Dashboard/') ?>">
								<i class="fa fa-th"></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="<?= site_url('Kategori/') ?>">
								<i class="fa fa-desktop"></i>
								<span>Kategori</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="<?= site_url('Toko/') ?>">
								<i class=" fa fa-bar-chart-o"></i>
								<span>Toko</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="<?= site_url('Kue/') ?>">
								<i class="fa fa-book"></i>
								<span>Produk</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="<?= site_url('Poin/') ?>">
								<i class="fa fa-gift"></i>
								<span>Produk Poin</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="<?= site_url('Penjualan/') ?>">
								<i class="fa fa-tasks"></i>
								<span>Penjualan</span>
							</a>
						</li>
						<li class="sub-menu">
							<a href="<?= site_url('tukar_poin/') ?>">
								<i class="fa fa-tasks"></i>
								<span>Penukaran Poin</span>
							</a>
						</li>
						<!-- dengan menu dropdown -->
						<!-- <li class="sub-menu">
							<a href="#" data-toggle="collapse" data-target="#transaksi-dropdown">
								<i class="fa fa-tasks"></i>
								<span>Transaksi</span>
							</a>
							<ul class="sub collapse" id="transaksi-dropdown">
								<li>
									<a href="<?= site_url('Penjualan/') ?>">Penjualan</a>
								</li>
								<li>
									<a href="<?= site_url('tukar_poin/') ?>">Penukaran Poin</a>
								</li>
							</ul>
						</li> -->
						<?php if ($user['role'] == 'Superadmin') : ?>
							<li class="sub-menu">
								<a href="<?= site_url('settings/') ?>">
									<i class="fa fa-user"></i>
									<span>User</span>
								</a>
							</li>
						<?php endif; ?>
					</ul>
			</aside>
		<?php endif; ?>
		<!--sidebar end-->