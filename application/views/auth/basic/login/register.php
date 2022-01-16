<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Admin Panel">
		<meta name="author" content="Crisil Admin">
		<meta name="keywords" content="Crisil">

		<!-- Title -->
		<title>Registration</title>

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
					<div class="col-md-12 col-xl-6 wrapper-3">
						<div class="row align-items-center">
							<div class="col-md-12 col-lg-7 d-block mx-auto">
								<div class="signpages3 justify-content-center m-3 m-lg-0 sign-2">
									<div class="sign2">
										<div class="card">
											<div class="card-body mt-2 mb-2 p-5">
												<!-- <img src="<?= base_url('assets/admin/logo.png') ?>" class="header-brand-img text-left mb-5 desktop-logo" alt="logo"> -->
												<!-- <img src="<?= base_url('') ?>" class="header-brand-img desktop-logo text-left mb-5 theme-logo" alt="logo"> -->
												<div class="clearfix"></div>
												<form method="post">
													<h5 class="text-left mb-2 tx-26">Sign Up</h5>
													<div class="form-group text-left">
														<label class="">Username</label>
														<input class="form-control rounded-11" placeholder="Users Name" name="username" type="text">
													</div>
													<!-- <div class="form-group text-left">
														<label class="">Email Address</label>
														<input class="form-control rounded-11" placeholder="Users email" name="useremail" type="text">
													</div> -->
													<div class="form-group text-left">
														<label class="">Password</label>
														<input class="form-control rounded-11" name="password" placeholder="password" type="password">
													</div>
													<!-- <div class="form-group mb-4 mt-4 text-left">
														<label class="custom-control custom-checkbox mb-0">
															<input type="checkbox" class="custom-control-input">
															<span class="custom-control-label">By creating an account you agree to the <br><a href="#">Terms and Services</a>and our <a href="#">Privacy Policy</a></span>
														</label>
													</div> -->
													
													<div class="row">
														<div class="col-12 mt-3">
															<button type="submit" formaction="<?= base_url(this_link.'save_user') ?>" class="btn btn-primary rounded-11 		btn-block">Create Your Account
															</button>
														</div>
													</div>
													<!-- <div class="text-center tx-15 text-muted mt-4">
														Already Have an Acoount ? <a class="btn-link font-weight-normal text-primary" href="#">Sign IN</a>
													</div> -->
												</form>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-6 d-md-block d-none wrapper-3 signinwrap">
						<div class="my-auto mx-auto">
							
							<img style="width:20% !important;" src="<?= base_url('assets/admin/logo.png') ?>" class="header-brand-img logo2 mb-2 desktop-logo" alt="logo">
							
							<!-- <img src="<?= base_url('assets/admin/logo.png') ?>" class="header-brand-img desktop-logo logo2 mb-2 theme-logo" alt="logo"> -->
							<h1 class="mb-3 tx-50 text-dark">You Already Have An <br> Account ?</h1>
							<a href="<?= base_url(this_link) ?>" class="btn  wd-150 text-white btn-md  btn-outline-primary rounded-11">Sign In</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

		<!-- Jquery js-->
		<!-- <script src="<?= this_asset ?>plugins/jquery/jquery.min.js"></script> -->

		<!-- Bootstrap js-->
		<!-- <script src="<?= this_asset ?>plugins/bootstrap/js/popper.min.js"></script> -->
		<script src="<?= this_asset ?>plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Perfect-scrollbar js -->
		<!-- <script src="<?= this_asset ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->

		<!-- Select2 js-->
		<!-- <script src="<?= this_asset ?>plugins/select2/js/select2.min.js"></script> -->

		<!-- Custom js -->
		<script src="<?= this_asset ?>js/custom.js"></script>

		<!-- Switcher js -->
		<!-- <script src="<?= this_asset ?>switcher/js/switcher.js"></script> -->

	</body>
</html>