<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags must come first in the head; any other head content must come after these tags -->

	<!-- Title -->
	<title><?= $judul;?></title>

	<!-- Favicon -->
	<link rel="icon" href="<?= Base_url('assets/original')?>/img/core-img/favicon.ico">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= Base_url('assets/original')?>/style.css">

</head>

<body>



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
					<div class="col-12 col-sm-4">
						<div class="top-social-area">
							<a href="<?= $konfig->instagram ?>" daafta-toggle="tooltip" data-placement="bottom"
								title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="<?= $konfig->youtube ?>" data-toggle="tooltip" data-placement="bottom"
								title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							<a href="<?= $konfig->no_wa ?>" data-toggle="tooltip" data-placement="bottom"
								title="no_wa"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
							<a href="<?= $konfig->tiktok ?>" class="p-2">
								<img src="<?= base_url('assets/original/img/tiktok.svg') ?>"
									style="width: 20px; height: 24px;">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo Area -->
		<div class="logo-area text-center">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12">
						<a href="index.html" class="original-logo"><img
								src="<?= Base_url('assets/original')?>/img/bg-img/tungga.png" alt=""></a>
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

						<!-- Subscribe btn -->
						<div class="subscribe-btn">
							<a href="<?= base_url('auth');?>" class="btn subscribe-btn">Login</a>
						</div>

						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>

						<!-- Menu -->
						<div class="classy-menu" id="originalNav">
							<!-- close btn -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
									<li><a href="<?= base_url('home/galeri')?>">Portofolio</a></li>
									<li><a href="<?= base_url() ?>">Home</a></li>
									<?php foreach ($kategori as $kate){?>
									<li><a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
											<?= $kate['nama_kategori'] ?>
										</a></li>

									<?php } ?>
								</ul>

								<!-- Nav End -->
							</div>
					</nav>

				</div>
			</div>
		</div>
	</header>
	<section class="portfolio">
		<div class="container">
			<div class="text-center pb-2">
				<h6 class="mb-4 ">Gallery</h6>
			</div>

			<div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
				data-aos-duration="500">
				<?php $no=1; foreach ($galeri as $aa) {?>
				<div class="col-lg-4 col-md-6 filter-app">
					<div class="portfolio-item">
						<img src="<?= base_url('assets/upload/galeri/'.$aa['foto'])?>" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h3><a href="<?= base_url('assets/upload/galeri/'.$aa['foto'])?>"
									data-gall="portfolioGallery" class="venobox" title="App 1" style=""></a></h3>
							<a href="<?= base_url('assets/upload/galeri/'.$aa['foto'])?>" data-gall="portfolioGallery"
								class="venobox" title="App 1"><i class="icofont-plus"></i></a>
						</div>
					</div>
				</div>
				<?php $no++; } ?>
			</div>
		</div>
	</section>
	<!-- ##### Instagram Feed Area Start ##### -->
	<div class="instagram-feed-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="insta-title">
						<h5>Follow us @busagamtunggajaya</h5>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
	<!-- ##### Instagram Feed Area End ##### -->

	<!-- ##### Footer Area Start ##### -->
	<footer class="footer-area text-center">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<!-- Footer Nav Area -->
					<div class="classy-nav-container breakpoint-off">
						<!-- Classy Menu -->
						<nav class="classy-navbar justify-content-center">

							<!-- Navbar Toggler -->
							<div class="classy-navbar-toggler">
								<span class="navbarToggler"><span></span><span></span><span></span></span>
							</div>

							<!-- Menu -->
							<div class="classy-menu">

								<!-- close btn -->
								<div class="classycloseIcon">
									<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
								</div>
							</div>
						</nav>
					</div>

					<!-- Footer Social Area -->
					<div class="footer-social-area mt-30">
						<div class="col-12">
							<div class="single-blog-area clearfix mb-100">
								<!-- Blog Content -->
								<div class="single-blog-content">
									<div class="line"></div>
									<a href="#" class="post-tag"><?= $konfig->judul_website;?></a>
									<p><?= $konfig->profil_website;?></p>
								</div>
							</div>
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

</body>

</html>