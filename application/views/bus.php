<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>MATA TRANS</title>

	<!-- Favicon -->
	<link rel="icon" href="<?= Base_url('assets/original')?>/img/core-img/remove.png">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?= Base_url('assets/original')?>/style.css">
	<style>
	.single-post-content p {
	text-align: justify;
	text-justify: inter-word; /* Optional: For better word spacing */
	
	}

	.single-catagory-area {
		margin-left: 100px;

	}
	</style>
</head>

<body style="background-color: #baffe6">
	<!-- Preloader -->
	<div id="preloader">
		<div class="preload-content">
			<div id="original-load"></div>
		</div>
	</div>

	<!-- Subscribe Modal -->
	<div class="subscribe-newsletter-area">
		<div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<div class="modal-body">
						<h5 class="title">Subscribe to my newsletter</h5>
						<form action="#" class="newsletterForm" method="post">
							<input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
							<button type="submit" class="btn original-btn">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ##### Header Area Start ##### -->
	<header class="header-area">

		<!-- Top Header Area -->
		<div class="container ">
			<div class="row h-100 align-items-center">
				<!-- Breaking News Area -->
				<div class="col-12 col-sm-8">
					<div class="breaking-news-area">
						<div id="breakingNewsTicker" class="ticker">
							<ul>
							</ul>
						</div>
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
		<div class="original-nav-area" id="stickyNav">
			<div class="classy-nav-container breakpoint-off">
				<div class="container">
					<!-- Classy Menu -->
					<nav class="classy-navbar justify-content-between">
				</div>
				</nav>
			</div>
		</div>
		</div>
	</header>
	<!-- ##### Header Area End ##### -->
	<!-- ##### Breadcumb Area Start ##### -->

	<div class="container ">
		<div class="d-flex">
			<p class="mr-2"><i class="fa fa-user text-primary"></i><?= $bus->judul; ?> </p>
			<p class="mr-2">
				<i class="fa fa-user text-primary"></i><?= $bus->id_kategori; ?> </p>

		</div>
	</div>

	<!-- ##### Breadcumb Area End ##### -->

	<!-- ##### Blog Wrapper Start ##### -->
	<div class="blog-wrapper  clearfix">
		<div class="container">
			<div class="row ">
				<!-- Single Blog Area -->
				<!-- Single Blog Area -->
				<div class="col-3 col-lg-7">
					<div class="single-blog-area clearfix mb-100">
					<div class="single-post-content">
						<h5><?= $bus->judul?></h5>
                            <?php 
                            $paragraphs = explode("\n", $bus->keterangan);
                            foreach ($paragraphs as $paragraph): 
                                if (trim($paragraph) != ''): // Pastikan tidak ada paragraf kosong
                            ?>
                                <p><?= $paragraph; ?></p>
                            <?php 
                                endif;
                            endforeach; 
                            ?>
            			</div>
					</div>
				</div>
				
				<!-- Single Blog Area -->
				<div class="col-8 col-md-6 col-lg-5">
					<div class="single-catagory-area clearfix mb-100">
						<img src="<?= Base_url('assets/upload/konten/'.$bus->foto)?>">
						<div>
							<br>
							<a href="<?= base_url('home/beranda')?>" type="button" class="btn btn-outline-secondary">BACK
								HOME</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ##### Cool Facts Area End ##### -->

	<!-- ##### Instagram Feed Area Start ##### -->
	<div class="instagram-feed-area">
		<div class="container">
			<div class="row">
				<div style="color: white;">
					<div class="insta-title">
						<h5>Follow us @matatrans.id</h5>
					</div>
				</div>
			</div>
		</div>


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
