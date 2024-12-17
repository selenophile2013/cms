<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>LOGIN</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= Base_url('assets/original')?>/img/core-img/remove.png">
	<link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= Base_url('assets/original')?>/img/core-img/remove.png" />
</head>

<body >
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<div class="brand-logo">
								<img src="<?= Base_url('assets/original')?>/img/core-img/remove.png" alt="logo">
							</div>
							<h4>Hello! Welcome🚍🌙
							</h4>
							<h6 class="font-weight-light">Silahkan Login</h6>
							<form class="pt-3" action="<?= base_url('auth/login') ?>" method="POST">
								<div class="form-group">
									<input type="text" class="form-control form-control-lg" name="username"
										placeholder="Enter your username">
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-lg" name="password"
										placeholder="Password">
								</div>
								<p class="form-text">
									Don't have an account? <a href="<?= base_url('registrasi')?>">Register here</a>
								</p>
								<div class="mt-3">
									<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
										type="submit">Login</button>
								</div>
								<div class="mt-3">
									<div id="menghilang">
										<?= $this->session->flashdata('alert') ?>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?= base_url('assets/skydash') ?>/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url('assets/skydash') ?>/js/off-canvas.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/js/hoverable-collapse.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/js/template.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/js/settings.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>
