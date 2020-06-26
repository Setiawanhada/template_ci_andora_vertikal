<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="<?php echo base_url('assets/images/brand/favicon.ico')?>" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/brand/favicon.ico')?>" />

		<!-- Title -->
		<title>Andora - Bootstrap4 Responsive Admin WebApp Dashboard Template</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>">

        <!--Font Awesome-->
		<link href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.css')?>" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="<?php echo base_url('assets/css/dashboard.css')?>" rel="stylesheet" />

		<!-- vector-map -->
		<link href="<?php echo base_url('assets/plugins/vector-map/jqvmap.min.css')?>" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="<?php echo base_url('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')?>" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="<?php echo base_url('assets/plugins/toggle-sidebar/css/sidemenu.css')?>" rel="stylesheet">

		<!-- morris Charts Plugin -->
		<!-- <link href="./assets/plugins/morris/morris.css" rel="stylesheet" /> -->

		<!---Font icons-->
		<link href="<?php echo base_url('assets/plugins/iconfonts/plugin.css')?>" rel="stylesheet" />
	</head>

	<body class="app sidebar-mini rtl">
		<div id="global-loader" ><div class="showbox"></div></div>
		<div class="page">
			<div class="page-main">
				<!-- Navbar-->
				<header class="app-header header">

					<!-- Navbar Right Menu-->
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img alt="logo" class="header-brand-img" src="assets/images/brand/logo1.png">
							</a>
							<!-- Sidebar toggle button-->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="">
								<form class="input-icon  mr-2 mt-1">
									<input class="form-control header-search" placeholder="Search&hellip;" tabindex="1" type="search">
									<div class="input-icon-addon">
										<i class="fe fe-search"></i>
									</div>
								</form>
							</div>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="d-none d-md-flex">
									<a href="#" class="nav-link icon full-screen-link" id="fullscreen-button">
										<i class="fe fe-minimize " ></i>
									</a>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-user"></i>
										<span class=" nav-unread badge badge-danger  badge-pill">3</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a class="dropdown-item text-center" href="#"> Open Contact List</a>
									<div class="dropdown-divider"></div>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/users/male/4.jpg)"></span>
											<div>
												<strong>Madeleine Scott</strong> Sent you add request
												<div class="small text-muted">
													view profile
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/users/female/14.jpg)"></span>
											<div>
												<strong>rebica</strong> Suggestions for you
												<div class="small text-muted">
													view profile
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/users/male/1.jpg)"></span>
											<div>
												<strong>Devid robott</strong> sent you add request
												<div class="small text-muted">
													view profile
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div><a class="dropdown-item text-center " href="#">View all contact list</a>
									</div>
								</div>

								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown"><i class="fe fe-mail"></i> <span class="pulse bg-success" aria-hidden="true"></span></a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item text-center" href="#">2 New Messages</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item d-flex pb-3" href="#">
											<span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/users/male/41.jpg)"></span>
											<div>
												<strong>Madeleine</strong> Hey! there I' am available....
												<div class="small text-muted">
													3 hours ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/users/female/1.jpg)"></span>
											<div>
												<strong>Anthony</strong> New product Launching...
												<div class="small text-muted">
													5 hour ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-3" href="#"><span class="avatar brround mr-3 align-self-center" style="background-image: url(assets/images/users/female/18.jpg)"></span>
											<div>
												<strong>Olivia</strong> New Schedule Realease......
												<div class="small text-muted">
													45 mintues ago
												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item text-center" href="#">See all Messages</a>
									</div>
								</div>
								<div class="dropdown">
									<a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround" style="background-image: url(assets/images/users/female/25.jpg)"></span>
										<span class="ml-2 d-none d-lg-block">
											<span class="text-dark">Jenna Side</span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-user"></i>My Profile</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-edit"></i>My Schedule</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-mail"></i> My Inbox</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-unlock"></i> Look Screen</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-power"></i> Log Out</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
