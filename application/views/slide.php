<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?= $judul;?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link
		href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700|Playfair+Display:400,700,900"
		rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
	<link rel="stylesheet" href="<?= base_url('assets/click')?>/css/animate.css">
	<link rel="stylesheet" href="<?= base_url('assets/click')?>/css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

	<style>
		.zoomable {
			transition: transform 0.3s ease-in-out;
			/* Animasi halus */
			cursor: pointer;
			/* Ikon kursor berubah */
		}

		.zoomable:hover {
			transform: scale(1.05);
			/* Membesar sedikit saat hover */
		}

		.fullscreen-overlay {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.8);
			z-index: 1000;
			justify-content: center;
			align-items: center;
		}

		.fullscreen-overlay img {
			max-width: 90%;
			max-height: 90%;
		}

	</style>
</head>

<body>
	<!--Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark cyan fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="<?= base_url('assets/click')?>/images/icons8-bus.png" alt="nav-logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
				aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('home/galeri')?>">BACK</a>
	</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--/.Navbar -->
	<!-- Portfolio-Section -->
	<section class="gallery-page">
		<div class="container">
			<h2>GALLERY MATA TRANS</h2>
			<div class="row justify-content-center">
				<?php 
    $no = 1; 
    $end_konten = array_slice($konten, 0, 4); 
    foreach ($galeri as $aa) { ?>
				<div class="col-md-4 col-12">
					<a href="<?= base_url('assets/upload/galeri/'.$aa['foto']) ?>" data-toggle="lightbox">
						<img class="mb-3 img-fluid fixed-size"
							src="<?= base_url('assets/upload/galeri/'.$aa['foto']) ?>" alt="plus-icon">
					</a>
					<div class="portfolio-info">
						<h3>
							<a href="<?= base_url('assets/upload/galeri/'.$aa['foto']) ?>" data-gall="portfolioGallery"
								class="venobox" title="App 1">
							</a>
						</h3>
						<a href="<?= base_url('assets/upload/galeri/'.$aa['foto']) ?>" data-gall="portfolioGallery"
							class="venobox" title="App 1">
							<i class="icofont-plus"></i>
						</a>
					</div>
				</div>
				<?php $no++; } ?>
			</div>
			<style>
				.fixed-size {
					width: 300px;
					/* Ganti dengan lebar yang Anda inginkan */
					height: 200px;
					/* Ganti dengan tinggi yang Anda inginkan */
					object-fit: cover;
					/* Memastikan gambar proporsional */
					border-radius: 8px;
					/* Opsional: Tambahkan sudut melengkung untuk estetika */
					display: block;
					/* Memastikan gambar memiliki tata letak yang stabil */
					margin: 0 auto;
					/* Memusatkan gambar di dalam kolom */
				}

				.img-fluid {
					max-width: 100%;
					/* Responsif untuk perangkat yang lebih kecil */
					height: auto;
				}

			</style>
			<div>
				<br>
				<a href="<?= base_url('home/beranda')?>" type="button" class="btn btn-outline-secondary">BACK
					HOME</a>
				</br>
			</div>
	</section>
	<!--/.Portfolio-Section -->
	<!-- Footer -->
	<!-- /.Footer -->
	<!-- Return to Top -->
	<a href="<?= base_url('assets/click')?>/javascript:" id="return-to-top"><i class="fa fa-long-arrow-up"
			aria-hidden="true"></i></a>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
	<!-- Custom JavaScript -->
	<script src="<?= base_url('assets/click')?>/js/animate.js"></script>
	<script src="<?= base_url('assets/click')?>/js/custom.js"></script>
	<script src="<?= base_url('assets/click')?>/https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script>
	<script>
		$(document).on('click', '[data-toggle="lightbox"]', function (event) {
			event.preventDefault();
			$(this).ekkoLightbox();
		});
		$(document).ready(function () {
			let currentSlide = 0; // Slide saat ini
			const slides = $(".slides"); // Container slide
			const totalSlides = $(".slides .slide").length; // Total jumlah slide

			// Fungsi untuk berpindah slide
			function goToSlide(index) {
				if (index < 0) {
					index = totalSlides - 1; // Kembali ke slide terakhir jika sebelumnya
				} else if (index >= totalSlides) {
					index = 0; // Kembali ke slide pertama jika setelah slide terakhir
				}
				slides.css("transform", translateX(-$ {
					index * 100
				} % ));
				currentSlide = index;
			}

			// Event listener untuk tombol "Next"
			$("#next-slide").click(function () {
				goToSlide(currentSlide + 1);
			});

			// Event listener untuk tombol "Previous"
			$("#prev-slide").click(function () {
				goToSlide(currentSlide - 1);
			});

			// Event listener untuk pagination
			$(".pagination a").click(function (event) {
				event.preventDefault();
				const index = $(this).parent().index();
				goToSlide(index);

				// Tambahkan class "active" untuk tombol yang dipilih
				$(".pagination a").removeClass("active");
				$(this).addClass("active");
			});
			console.log("Next clicked"); // Untuk tombol next
			console.log("Previous clicked"); // Untuk tombol previous
		});

		$(document).ready(function () {
			// Tambahkan elemen overlay ke body
			$("body").append('<div class="fullscreen-overlay"><img src="" alt="Fullscreen Image"></div>');

			$(".zoomable").click(function () {
				const imgSrc = $(this).attr("src"); // Ambil sumber gambar
				$(".fullscreen-overlay img").attr("src", imgSrc); // Masukkan gambar ke overlay
				$(".fullscreen-overlay").fadeIn(); // Tampilkan overlay
			});

			// Tutup overlay saat diklik
			$(".fullscreen-overlay").click(function () {
				$(this).fadeOut();
			});
		});

		$(document).on('click', '[data-toggle="lightbox"]', function (event) {
			event.preventDefault();
			$(this).ekkoLightbox({
				maxWidth: 800, // Ukuran maksimal gambar dalam modal
				maxHeight: 600
			});
		});

	</script>
</body>

</html>
