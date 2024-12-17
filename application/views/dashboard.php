<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title><?= $judul;?></title>

	<!-- Favicon -->
	<link rel="icon" href="<?= Base_url('assets/original')?>/img/core-img/remove.png">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= Base_url('assets/original')?>/style.css">

</head>

<body style="background-color: #e1e7ff">

	<!-- ##### Header Area Start ##### -->
	<header class="header-area">
		<!-- Top Header Area -->
		<div class="top-header">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<!-- Breaking News Area -->
					<div class="col-12 col-sm-8">
						<div class="breaking-news-area">
							<div id="breakingNewsTicker" class="ticker">
								<ul>
									<li><a href="#"><?= $konfig->judul_website;?></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Top Social Area -->
					
				</div>
			</div>
		</div>
		<!-- Logo Area -->
		<div class="logo-area text-center">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<a href="index.html" class="original-logo"><img
								src="<?= Base_url('assets/original')?>/img/core-img/remove.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Nav Area -->
		<div class="original-nav-area" id="stickyNav">
			<div class="classy-nav-container breakpoint-off">
				<div class="container">
					<!-- Classy Menu -->
					<nav class="classy-navbar justify-content-between">
						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>

						<!-- Menu -->
						<div class="classy-menu" id="originalNav">
							<!-- close btn -->

							<!-- Nav Start -->
							<div class="subscribe-btn">
							<a href="<?= base_url('home/beranda');?>" class="btn subscribe-btn">HOME</a>
						</div>
								<!-- Nav End -->
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ##### Header Area End ##### -->
	<!-- ##### Blog Wrapper Start ##### -->
	<div class="blog-wrapper section-padding-100 clearfix">
		<div class="container">
			<div class="row align-items-end">
				<!-- Single Blog Area -->
				<div class="col-12 col-lg-4">
					<div class="single-blog-area clearfix mb-100">
						<!-- Blog Content -->
						<div class="single-blog-content">
							<div class="line"></div>
							<a href="#" class="post-tag">MATA TRANS</a>
							<h4><a href="#" class="post-headline">Welcome </a></h4>
							<p>Mata Trans adalah layanan penyewaan kendaraan yang berkomitmen untuk
								memberikan pengalaman perjalanan yang nyaman, aman, dan terjangkau di beberapa kota
								besar di Indonesia.
								Dengan armada yang lengkap dan modern, kami siap memenuhi berbagai kebutuhan mobilitas
								Anda,
								baik untuk perjalanan bisnis, wisata, maupun kebutuhan pribadi..</p>
						</div>
					</div>
				</div>
				<div class="container my-5">
					<h1 class="text-center mb-4">Mata Trans</h1>
					<div class="row g-4">
						<!-- Sedan Elegan -->
						<div class="col-md-4">
							<div class="card shadow-sm">
								<img src="<?= Base_url('assets/original')?>/img/bg-img/hm.jpg" class="card-img-top"
									alt="Sedan Elegan">
								<div class="card-body">
									<h5 class="card-title">Primo Elegan</h5>
									<p class="card-text">Ideal untuk perjalanan bisnis dan pertemuan formal.</p>
								
								</div>
							</div>
						</div>
						<!-- SUV Tangguh -->
						<div class="col-md-4">
							<div class="card shadow-sm">
								<img src="<?= Base_url('assets/original')?>/img/bg-img/kursi.jpg" class="card-img-top"
									alt="SUV Tangguh">
								<div class="card-body">
									<h5 class="card-title">SEAT NYAMAN</h5>
									<p class="card-text">Untuk perjalanan di dalam kota maupun lintas kota dengan
										kenyamanan ekstra.</p>
								</div>
							</div>
						</div>
						<!-- Kendaraan Wisata -->
						<div class="col-md-4">
							<div class="card shadow-sm">
								<img src="<?= Base_url('assets/original')?>/img/bg-img/jb5.jpg" class="card-img-top"
									alt="Kendaraan Wisata">
								<div class="card-body">
									<h5 class="card-title">Kendaraan Wisata</h5>
									<p class="card-text">Minibus dan bus untuk rombongan wisata, perjalanan keluarga
										besar, atau acara khusus.</p>
								</div>
							</div>
						</div>
			</div>
				</div>
				<div class="container my-5">
    <h1 class="text-center mb-4 text-dark fw-bold">Mengapa Memilih Sewa Kendaraan Mata Trans?</h1>
    <p class="text-center fs-5 text-secondary mb-5">Kami hadir untuk memastikan setiap perjalanan Anda menjadi nyaman, aman, dan mudah!</p>
    <div class="row gy-4">
        <!-- Keandalan -->
        <div class="col-md-6 col-lg-4">
            <div class="p-4 border border-secondary rounded-3 shadow-sm h-100">
                <div class="mb-3 text-center">
                    <i class="bi bi-shield-check fs-1 text-secondary"></i>
                </div>
                <h5 class="fw-bold text-dark text-center">Keandalan</h5>
                <p class="text-secondary text-center">Armada kami selalu dalam kondisi prima, siap menemani perjalanan Anda kapan saja.</p>
            </div>
        </div>
        <!-- Kenyamanan -->
        <div class="col-md-6 col-lg-4">
            <div class="p-4 border border-secondary rounded-3 shadow-sm h-100">
                <div class="mb-3 text-center">
                    <i class="bi bi-sofa fs-1 text-secondary"></i>
                </div>
                <h5 class="fw-bold text-dark text-center">Kenyamanan</h5>
                <p class="text-secondary text-center">Nikmati perjalanan dengan fasilitas kendaraan yang dirancang untuk kenyamanan maksimal.</p>
            </div>
        </div>
        <!-- Pelayanan Pelanggan -->
        <div class="col-md-6 col-lg-4">
            <div class="p-4 border border-secondary rounded-3 shadow-sm h-100">
                <div class="mb-3 text-center">
                    <i class="bi bi-person-heart fs-1 text-secondary"></i>
                </div>
                <h5 class="fw-bold text-dark text-center">Pelayanan Pelanggan</h5>
                <p class="text-secondary text-center">Tim kami yang ramah dan profesional siap melayani kebutuhan Anda dengan sepenuh hati.</p>
            </div>
        </div>
        <!-- Harga Terjangkau -->
        <div class="col-md-6 col-lg-4">
            <div class="p-4 border border-secondary rounded-3 shadow-sm h-100">
                <div class="mb-3 text-center">
                    <i class="bi bi-wallet2 fs-1 text-secondary"></i>
                </div>
                <h5 class="fw-bold text-dark text-center">Harga Terjangkau</h5>
                <p class="text-secondary text-center">Harga bersahabat tanpa kompromi pada kualitas layanan yang Anda dapatkan.</p>
            </div>
        </div>
        <!-- Kemudahan Pemesanan -->
        <div class="col-md-6 col-lg-4">
            <div class="p-4 border border-secondary rounded-3 shadow-sm h-100">
                <div class="mb-3 text-center">
                    <i class="bi bi-laptop fs-1 text-secondary"></i>
                </div>
                <h5 class="fw-bold text-dark text-center">Kemudahan Pemesanan</h5>
                <p class="text-secondary text-center">Pesan kendaraan favorit Anda hanya dalam beberapa klik melalui sistem online kami.</p>
            </div>
        </div>
    </div>
</div>

   
				<!-- Single Blog Area -->
				<div class="col-12 col-md-6 col-lg-4">
					<!-- WhatsApp Floating Button -->
					<a href="<?= $konfig->no_wa ?>" target="_blank" class="whatsapp-btn" data-toggle="tooltip"
						data-placement="left" title="Order Now on WhatsApp">
						<img src="<?= base_url('assets/original/img/wa.png') ?>" style="width: 60px; height: 60px;">
					</a>
					<style>
						/* Floating WhatsApp Button Style */
						.whatsapp-btn {
							position: fixed;
							bottom: 20px;
							right: 20px;
							background-color: #25d366;
							/* WhatsApp green */
							border-radius: 50%;
							box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
							animation: float 1.5s ease-in-out infinite;
							z-index: 1000;
							padding: 10px;
							transition: transform 0.3s ease-in-out;
						}

						/* WhatsApp Button Hover Effect */
						.whatsapp-btn:hover {
							transform: scale(1.1);
						}

						/* Float Animation */
						@keyframes float {
							0% {
								transform: translateY(0);
							}

							50% {
								transform: translateY(-10px);
							}

							100% {
								transform: translateY(0);
							}
						}

					</style>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>
		document.write(new Date().getFullYear());

	</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by
	<a href="" target="">little moon</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

	</footer>
	<!-- ##### Footer Area End ##### -->

	<!-- jQuery (Necessary for All JavaScript Plugins) -->
	<script src="<?= Base_url('assets/original')?>/js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="<?= Base_url('assets/original')?>/js/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="<?= Base_url('assets/original')?>/js/bootstrap.min.js"></script>
	<!-- Plugins js -->
	<script src="<?= Base_url('assets/original')?>/js/plugins.js"></script>
	<!-- Active js -->
	<script src="<?= Base_url('assets/original')?>/js/active.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>



</body>

</html>
