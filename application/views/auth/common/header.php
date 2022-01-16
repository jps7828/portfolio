<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta name="description" content="Admin Panel ">
	<meta name="author" content="Crisil Infotech">
	<meta name="keywords" content=" ">

	<!-- Title -->
	<title>Admin</title>

	<!-- Bootstrap css-->
	<link href="<?= this_asset ?>plugins/bootstrap/bootstrap.min.css" rel="stylesheet"/>

	<!-- Icons css-->
	<link href="<?= this_asset ?>css/icons.css" rel="stylesheet"/>
	<link href="<?= this_asset ?>css/custom.css" rel="stylesheet"/>

	<!-- Style css-->
	<link href="<?= this_asset ?>css/style.css" rel="stylesheet">
	<link href="<?= this_asset ?>css/dark-boxed.css" rel="stylesheet">
	<link href="<?= this_asset ?>css/boxed.css" rel="stylesheet">
	<link href="<?= this_asset ?>css/skins.css" rel="stylesheet">
	<link href="<?= this_asset ?>css/dark-style.css" rel="stylesheet">

	<!-- Color css-->
	<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= this_asset ?>css/colors/color.css">
	<link href="<?= this_asset ?>plugins/sweet-alert/sweetalert.css" rel="stylesheet">
	<!-- Select2 css -->
	<link href="<?= this_asset ?>plugins/select2/css/select2.min.css" rel="stylesheet">

	<!-- Internal DataTables css-->
	<link href="<?= this_asset ?>plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="<?= this_asset ?>plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
	<link href="<?= this_asset ?>plugins/datatable/fileexport/buttons.bootstrap4.min.css" rel="stylesheet" />

	<!-- Sidemenu css-->
	<link href="<?= this_asset ?>css/sidemenu/sidemenu.css" rel="stylesheet">

	<!-- Switcher css-->
	<link href="<?= this_asset ?>switcher/css/switcher.css" rel="stylesheet">
	<link href="<?= this_asset ?>switcher/demo.css" rel="stylesheet">

	<!-- CK Editor -->
	<script src="<?= this_asset ?>ckeditor/ckeditor.js"></script>


</head>

<body class="main-body leftmenu">

	<!-- Page -->
	<div class="page">

		<!-- Sidemenu -->
		<div class="main-sidebar main-sidebar-sticky side-menu">
			<div class="sidemenu-logo p-2"style="background-color: ;">
				<a class="main-logo" href="<?= base_url('Auth/Home_Admin') ?>">
					<img style="width:100px;" src="<?= base_url('assets/admin/logo2.png') ?>" class="header-brand-img desktop-logo" alt="logo">
					<img src="<?= base_url('assets/admin/logo2.png')?>" class="header-brand-img icon-logo" alt="logo">
					<img src="<?= base_url('assets/admin/logo2.png')?>" class="header-brand-img desktop-logo theme-logo" alt="logo">
					<img src="<?= base_url('assets/admin/logo2.png')?>" class="header-brand-img icon-logo theme-logo" alt="logo">
				</a>
			</div>
			<div class="main-sidebar-body">
				<ul class="nav">
					<!-- <li class="nav-header"><span class="nav-label">Dashboard</span></li> -->
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Home_Admin') ?>"><i class="fe fe-home sidemenu-icon"></i><span class="sidemenu-label">Home</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Menu') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Menu</span></a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Page') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Page</span></a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/About_us') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">About Us</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Team') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Team</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Portfolio') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Portfolio</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Skills') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Skills</span></a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/E_portal') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">E_Portal</span></a>
					</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Resources') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Resources</span></a>
					</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Gallery') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Gallery</span></a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Slider') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Slider</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Clients') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Clients</span></a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Blogs') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Blogs</span></a>
					</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Background') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Background Image</span></a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Social_Network') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Social Network</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Feedback') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Feedback</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link with-sub" href="<?= base_url('Auth/Subscription') ?>"><i class="fe fe-book sidemenu-icon"></i><span class="sidemenu-label">Subscription</span></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- End Sidemenu -->

		<!-- Main Header-->
		<div class="main-header side-header sticky">
			<div class="container-fluid">
				<div class="main-header-left">
					<a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
				</div>
				<div class="main-header-center">
					<div class="responsive-logo">
						<a href="<?= base_url('Auth/Home_Admin') ?>"><img style="width: 200px;" src="<?= base_url('assets/admin/logo2.png') ?>" class="mobile-logo" alt="logo"></a>
						<a href="<?= base_url('Auth/Home_Admin') ?>"><img style="width: 200px;" src="<?= base_url('assets/admin/logo2.png') ?>" class="mobile-logo-dark" alt="logo"></a>
					</div>
				</div>
				<div class="main-header-right">

					<!-- Sign Out -->
					<a class="dropdown-item" href="<?= base_url('Auth/Basic/Login/do_logout') ?>">
						<i class="fe fe-power"></i> Sign Out
					</a>
					<!-- Sign Out -->

			</div>
		</div>
	</div>
	<!-- End Main Header-->

	