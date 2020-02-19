<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.in/templates/admin/aegis/source/light/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2019 04:35:19 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1,
			shrink-to-fit=no" name="viewport">
	<title>SimMas - Admin Dashboard</title>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/app.min.css">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="<?php echo base_url() ?>assets/css/flipclock.css" rel="stylesheet" media="all" />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bundles/bootstrap-social/bootstrap-social.css">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/components.css">
	<!-- Custom style CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">
	<link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url()?>assets/img/feature_salary.png' />

  <link rel="stylesheet" href="<?php echo base_url()?>assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

	<link rel="stylesheet" href="<?php echo base_url()?>assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
</head>

<body>
	<div class="loader"></div>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<div class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
						<li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
								<i data-feather="maximize"></i>
							</a></li>
					</ul>
				</div>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown"
							class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
								src="<?php echo base_url()?>assets/img/user_man-512.png" class="user-img-radious-style"> <span
								class="d-sm-none d-lg-inline-block"></span></a>
						<div class="dropdown-menu dropdown-menu-right pullDown">
							<div class="dropdown-title">Hello Admin</div>
							<a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
							</a>
							<div class="dropdown-divider"></div>
							<a href="<?php echo base_url('logout'); ?>" class="dropdown-item has-icon text-danger"> <i
									class="fas fa-sign-out-alt"></i> Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<div class="main-sidebar sidebar-style-2">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand">
						<a href="index.html"> <img alt="image" src="<?php echo base_url()?>assets/img/feature_salary.png" class="header-logo" /> <span
								class="logo-name">SimMas</span>
						</a>
					</div>
					<div class="sidebar-user">
						<div class="sidebar-user-picture">
							<img alt="image" src="<?php echo base_url()?>assets/img/user_man-512.png">
						</div>
						<div class="sidebar-user-details">
							<div class="user-name">Admin</div>
							<div class="user-role">Administrator</div>
						</div>
					</div>
					<ul class="sidebar-menu">
						<li class="menu-header">Menu</li>
						<li class="dropdown active"><a href="#"><i data-feather="home"></i><span>Dashboard</span></a>
						</li>
						<li class="dropdown"><a href="#" class="nav-link has-dropdown"><i
									data-feather="layers"></i><span>Operasional</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?php echo base_url('infaq/masuk'); ?>">Uang Masuk</a></li>
								<li><a class="nav-link" href="<?php echo base_url('infaq/keluar'); ?>">Uang Keluar</a></li>
							</ul>
						</li>

						<li class="dropdown"><a href="#" class="nav-link has-dropdown"><i
									data-feather="credit-card"></i><span>Tabungan Qurban</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?php echo base_url('donatur'); ?>">Donatur</a></li>
								<li><a class="nav-link" href="<?php echo base_url('kelompok'); ?>">Kelompok</a></li>
								<li><a class="nav-link" href="<?php echo base_url('tanggungan'); ?>">Tanggungan</a></li>
								<li><a class="nav-link" href="<?php echo base_url('bayar'); ?>">Angsuran</a></li>
							</ul>
						</li>
						<li class="dropdown "><a href="<?php echo base_url('jam') ?>" ><i
									data-feather="monitor"></i><span>Jadwal Sholat</span>
							</a>
						</li>

						<!-- <li class="dropdown"><a href="#" class="nav-link has-dropdown"><i
									data-feather="command"></i><span>Gaji</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="chat.html">Chat</a></li>
								<li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
							</ul>
						</li> -->
            <li class="dropdown"><a href="#" class="nav-link has-dropdown"><i
									data-feather="folder-plus"></i><span>Laporan</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="widget-chart.html">Data Karyawan</a></li>
								<li><a class="nav-link" href="widget-data.html">Data Jabatan</a></li>
							</ul>
						</li>

					</ul>
				</aside>
			</div>
      <div class="main-content">
				<section class="section">
					<div class="row">
						<div class="card-body">
							<h4><?php echo $page_title; ?></h4>
						</div>
					</div>
					</section>
					
