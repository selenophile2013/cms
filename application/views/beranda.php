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
								<img src="<?= base_url('assets/click')?>/images/icons8-bus.png" alt="nav-logo">

							</form>

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
								src="<?= Base_url('assets/original')?>/img/core-img/remove.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
		<!-- Nav Area -->
		<div class="original-nav-area" id="stickyNav" >
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
										KONTEN</button>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		
	</div>
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
							<p>PT. Mata Indah Nusantara adalah perusahaan yang bergerak di berbagai sektor layanan (Multifaceted Company) 
                                dengan komitmen untuk memperkuat infrastruktur dan perekonomian Indonesia melalui inovasi dan kualitas layanan 
                                yang superior, dan terpercaya..</p>
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
		<section class="section pt-0 bottom-slant-gray" id="content" style="background-color: #baffe6">
			<div class="container">
				<div class="row">
					<?php
    				$end_konten = array_slice($konten, 0, 4); 
    				foreach ($end_konten as $uu) { ?>
					<div class="col-12 col-lg-6 mt-10">
						<!-- Blog Content -->
						<div class="single-blog-content">
							<img class="card-img-top mb-3" src="<?= base_url('assets/upload/konten/'.$uu['foto'])?>"
								alt="<?= $uu['judul']?>" class="img-fluid">
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
				<div class="d-flex justify-content-center mb-10 mt-30">
					<p>
						<a href="<?= base_url('home/blog') ?>" class="btn btn-primary text-white py-3 px-4">Lihat
							Semua</a>
					</p>
				</div>
			</div>
			<style>
				.single-blog-content img {
					width: 100%;
					/* Pastikan gambar memenuhi lebar kontainer */
					height: auto;
					/* Menjaga rasio aspek gambar tetap */
					object-fit: cover;
					/* Untuk gambar yang memenuhi area tanpa distorsi */
					border-radius: 8px;
					/* Memberikan sudut melengkung pada gambar */
					box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
					/* Menambahkan sedikit bayangan untuk efek kedalaman */
				}

			</style>
			<div class="instagram-feed-area">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<footer class="footer-area text-center">
								<div class="col-12">
									<div class="single-blog-area clearfix mb-100">
										<footer class="footer-area text-center">
											<div class="col-12">
												<div class="single-blog-area clearfix mb-100">
													<div class="single-blog-content">
														<div class="line"></div>
														<a href="#" class="post-tag"><?= $konfig->judul_website;?></a>
														<p><?= $konfig->profil_website;?></p>
													</div>
												</div>
											</div>
											<div class="social-links">
												<a href="<?= $konfig->instagram ?>" target="_blank" class="social-icon">
													<i class="fa fa-instagram"></i>
												</a>
												<a href="<?= $konfig->youtube ?>" target="_blank" class="social-icon">
													<i class="fa fa-youtube"></i>
												</a>
												<a href="https://wa.me/<?= $konfig->no_wa ?>" target="_blank"
													class="social-icon">
													<i class="fa fa-whatsapp"></i>
												</a>
												<a href="<?= $konfig->tiktok ?>" target="_blank" class="social-icon">
													<img src="<?= base_url('assets/original/img/tiktok.svg') ?>"
														alt="TikTok">
												</a>
											</div>
											<style>
												.social-links {
													display: flex;
													justify-content: center;
													gap: 15px;
													margin-top: 20px;
												}

												.social-links .social-icon {
													font-size: 30px;
													/* Ukuran ikon yang konsisten */
													color: #555;
													transition: color 0.3s ease;
													display: flex;
													align-items: center;
													justify-content: center;
													width: 40px;
													/* Ukuran lebar ikon yang konsisten */
													height: 40px;
													/* Ukuran tinggi ikon yang konsisten */
													border-radius: 50%;
													background-color: #f0f0f0;
													/* Warna latar belakang ikon */
												}

												.social-links .social-icon:hover {
													color: #007BFF;
													background-color: #e2e2e2;
													/* Efek hover */
												}

												.social-links img {
													width: 25px;
													/* Menetapkan lebar gambar TikTok agar sesuai dengan ukuran lainnya */
													height: 25px;
													/* Menetapkan tinggi gambar TikTok */
													object-fit: contain;
												}

											</style>
										</footer>
									</div>
							</footer>
						</div>
						<div class="insta-title">
							<h5>Follow us @matatrans.id</h5>
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
