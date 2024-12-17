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
	<link rel="<?= Base_url('assets/original')?>/img/core-img/remove.png">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= Base_url('assets/original')?>/style.css">

</head>

<body style="background-color: #baffe6">



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
							<form action="<?= base_url('home/cari') ?>" method="post" class="form-inline my-2 my-lg-0">
								<input type="text" name="judul" class="form-control mr-2" placeholder="Cari Artikel..."
									required>
								<button type="submit" class="btn btn-primary">Cari</button>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- WhatsApp Floating Button -->
		<a href="<?= $konfig->no_wa ?>" target="_blank" class="whatsapp-btn" data-toggle="tooltip" data-placement="left"
			title="Order Now on WhatsApp">
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
							<div class="classy-menu" id="originalNav">
							<!-- close btn -->

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
									<li><a href="<?= base_url('home/beranda') ?>">Home</a></li>
									<select onchange="window.location.href=this.value;">
										<option value="">Kategori</option>
										<?php foreach ($kategori as $kate) { ?>
										<option value="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
											<?= $kate['nama_kategori'] ?>
										</option>
										<?php } ?>
									</select>
									<li><a href="<?= base_url('home/galeri')?>">GALERY</a></li>
								</ul>
								<!-- Nav End -->
							</div>
						</div>
					</nav>

				</div>
			</div>
		</div>
	</header>
	<!-- ##### Header Area End ##### -->
	<div class="hero-area">
		<!-- Hero Slides Area -->
		<div class="hero-slides owl-carousel">
			<?php foreach ($caraousel as $cara): ?>

			<div class="single-hero-slide bg-img"
				style="background-image: url('<?= base_url('assets/upload/caraousel/' . $cara['foto']); ?>');">

				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12">

							<div class="slide-content text-center">
								<p data-aos="fade-up" data-aos-delay="200">
									<a href="#content" button type="button" class="btn btn-primary">LIHAT
										KONTEN</button></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>


	<!-- ##### Hero Area End ##### -->

	<!-- ##### Blog Wrapper Start ##### -->
	<div class="blog-wrapper section-padding-100 clearfix">
		
	<section class="section pt-0 bottom-slant-gray" id="content" style="background-color: #baffe6">
				<div class="container">
				<div class="row">
					<?php foreach ($konten as $uu){?>
					<div class="col-12 col-lg-4 mt-10">
						<!-- Blog Content -->
						<div class="single-blog-content">
							<img class="card-img-top mb-2" src="<?= base_url('assets/upload/konten/'.$uu['foto'])?>">
							<div class="line"></div>
							<a href="#" class="post-tag"><?= $uu['judul'] ?></a>
							<h4><a href="#" class="post-headline">MATA TRANS</a></h4>
							<div class="d-flex justify-content-center mb-3">
								<small class="mr-3"><i class="fa fa-user text-primary"></i> <?= $uu['nama']?></small>
								<small class="mr-3"><i class="fa fa-user text-primary"></i>
									<?= $uu['nama_kategori']?></small>
							</div>
							<br>
							<div>
								<a href="<?= base_url('home/artikel/'. $uu['slug'])?>" class="btn original-btn">Baca
									Selengkapnya</a>
							</div>
							</br>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
	</div>

	<!-- ##### Sidebar Area ##### -->
	<div class="col-12 col-md-4 col-lg-3">
		<div class="post-sidebar-area">
			<div class="sidebar-widget-area">
				<h5 class="title">Tags</h5>
				<div class="widget-content">
					<ul class="tags">
						<div
							style="display: flex; justify-content: center; align-items: center; text-align: center; margin-top: 20px;">
							<a href="<?= $konfig->instagram ?>" data-toggle="tooltip" data-placement="bottom"
								title="Instagram">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
							<a href="<?= $konfig->youtube ?>" data-toggle="tooltip" data-placement="bottom"
								title="Youtube" style="margin: 0 10px;">
								<i class="fa fa-youtube" aria-hidden="true"></i>
							</a>
							<a href="<?= $konfig->no_wa ?>" data-toggle="tooltip" data-placement="bottom"
								title="Whatsapp">
								<i class="fa fa-whatsapp" aria-hidden="true"></i>
							</a>
						</div>

					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- ##### Instagram Feed Area Start ##### -->
	<div class="instagram-feed-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="insta-title">
						<h5>Follow us @matatrans.id</h5>
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
