<html lang="en"><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets/skydash') ?>/images/favicon.png">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url('assets/skydash') ?>/images/logo.svg" alt="logo">
              </div>
              <div class="container">
        <h2>Registrasi</h2>
        <form class="mb-3" action="<?= base_url('registrasi')?>" method="POST">
        <form>
                  <div class="form-group">
                    <label>Username</label>
                    <input 
						type="text" 
						class="form-control"
						name="username"
						placeholder="Masukkan username"
						autofocus 
						/>
                  </div>
				  <div class="form-group">
                    <label>Nama</label>
                    <input 
						type="text" 
						class="form-control"
						name="nama"
						placeholder="Masukkan nama"
						autofocus 
						/>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input 
						type="password" 
						class="form-control"
						name="password"
						aria-describedby="password"
						/>
                  </div>
                  <div class="input-group input-group-merge">
									<div class="row pb-30">
								<p>Sudah punya akun? <a href="<?= base_url('auth')?>">Login</a></p>
									</div>
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Registrasi</button>
                  </div>
                  <div id="ngilang">
					<?= $this->session->flashdata('alert')?>
					</div>
                
            </form>

    </div>

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
  <script src=".<?= base_url('assets/skydash') ?>/vendors/js/vendor.bundle.base.js"></script>
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



</body></html>