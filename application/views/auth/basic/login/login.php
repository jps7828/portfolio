<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Admin Panel">
		<meta name="author" content="Crisil">
		<meta name="keywords" content="">

		<!-- Title -->
		<title>Login</title>

		<!-- Bootstrap css-->
		<link href="<?= this_asset ?>plugins/bootstrap/bootstrap.min.css" rel="stylesheet"/>

		<!-- Icons css-->
		<!-- <link href="<?= this_asset ?>css/icons.css" rel="stylesheet"/> -->

		<!-- Style css-->
		<link href="<?= this_asset ?>css/style.css" rel="stylesheet">
		<!-- <link href="<?= this_asset ?>css/dark-boxed.css" rel="stylesheet">
		<link href="<?= this_asset ?>css/boxed.css" rel="stylesheet">
		<link href="<?= this_asset ?>css/skins.css" rel="stylesheet">
		<link href="<?= this_asset ?>css/dark-style.css" rel="stylesheet"> -->

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= this_asset ?>css/colors/color.css">

		<!-- P-SCROLL css-->
		<!-- <link href="<?= this_asset ?>plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet"> -->

		<!-- Switcher css-->
		<!-- <link href="<?= this_asset ?>switcher/css/switcher.css" rel="stylesheet">
		<link href="<?= this_asset ?>switcher/demo.css" rel="stylesheet"> -->

	</head>

	<body class="horizontalmenu">

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-12 col-xl-6 offset-xl-3 wrapper-3">
						<div class="row align-items-center">
							<div class="col-md-12 col-lg-7 d-block mx-auto">
								<div class="signpages3 justify-content-center m-3 m-lg-0 sign-2">
									<div class="sign2">
										<div class="card">
											<div class="card-body mt-2 mb-2 p-5">
												<!-- <img src="<?= base_url() ?>" class="header-brand-img text-left mb-5 desktop-logo" alt="logo">
												<img src="<?= base_url() ?>" class="header-brand-img desktop-logo text-left mb-5 theme-logo" alt="logo"> -->
												<div class="clearfix"></div>
												<form method="post">
													<h5 class="text-left mb-2 tx-26">Sign In</h5>

													<?= $this->session->flashdata('success')!=""?'<div class="alert alert-success">'.$this->session->flashdata('success').'</div>':"" ?>

													<?= $this->session->flashdata('fail')!=""?'<div class="alert alert-danger">'.$this->session->flashdata('fail').'</div>':"" ?>
													
													<div class="form-group text-left">
														<label class="">Username</label>
														<input class="form-control rounded-11" placeholder="Users email" name="username" type="text">
													</div>
													<div class="form-group text-left">
														<label class="">Password</label>
														<input class="form-control rounded-11" name="password" placeholder="password" type="password">
													</div>
													<div class="row">
														<!-- <div class="col-12">
															<div class="form-group mb-0 text-center">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input">
																	<span class="custom-control-label">Remember me</span>
																</label>
															</div>
														</div> -->
														
														<div class="col-12 mt-3">
															<button type="submit" formaction="<?= base_url(this_link.'do_login') ?>" 
															class="btn btn-primary rounded-11 btn-block">SIGN IN</button>
														</div>
														<!-- <div class="col-12 text-center mt-3">
															<a href="forgot.html" class="text-dark">Forgot password?</a>
														</div> -->
													</div>
													
												</form>
												<!-- <hr class="divider text-center mt-4">
												<div class="coming-form d-flex text-center justify-content-center mt-4">
													<div class="coming-form1 mr-4">
														<a href="#">
															<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></i>
														</a>
													</div>
													<div class="coming-form1 mr-4">
														<a href="#">
															<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></i>
														</a>
													</div>
													<div class="coming-form1">
														<a href="#">
															<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></i>
														</a>
													</div>
												</div> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
<!--
					<div class="col-md-12 col-xl-6 d-md-block d-none wrapper-3 signinwrap">
						<div class="my-auto mx-auto">
							
							<img style="width:20% !important;" src="<?= base_url('assets/admin/logo.png') ?>" class="header-brand-img logo2 mb-2 desktop-logo" alt="logo">

							<h1 class="mb-3 tx-50 text-dark">You Dont Have An <br> Account ?</h1>
							<a href="<?= base_url(this_link.'register') ?>" class="btn  wd-150 text-white btn-md  btn-outline-primary rounded-11">Sign Up</a>
						</div>
					</div>
-->
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

		<!-- Jquery js-->
		<script src="<?= this_asset ?>plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="<?= this_asset ?>plugins/bootstrap/js/popper.min.js"></script>
		<script src="<?= this_asset ?>plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?= this_asset ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- Select2 js-->
		<script src="<?= this_asset ?>plugins/select2/js/select2.min.js"></script>

		<!-- Custom js -->
		<script src="<?= this_asset ?>js/custom.js"></script>

		<!-- Switcher js -->
		<script src="<?= this_asset ?>switcher/js/switcher.js"></script>

	</body>
</html>