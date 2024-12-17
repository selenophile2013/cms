<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fasilitas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= Base_url('assets/foody/')?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= Base_url('assets/foody/')?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= Base_url('assets/foody/')?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= Base_url('assets/foody/')?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= Base_url('assets/foody/')?>css/style.css" rel="stylesheet">

    <!-- Custom Styles for Enhanced Horizontal Layout -->
    <style>
        body {
            background: linear-gradient(to right, #a1c4fd, #c2e9fb);
            font-family: 'Open Sans', sans-serif;
            color: #333333;
        }

        .page-header {
            background: rgba(0, 0, 0, 0.5) url('<?= Base_url('assets/foody/')?>img/header-bg.jpg') no-repeat center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }

        .page-header h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .breadcrumb {
            background: transparent;
            color: #ffffff;
        }

        .breadcrumb a {
            color: #ffcc00;
        }

        .horizontal-layout {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            gap: 30px;
            padding: 20px 0;
        }

        .horizontal-layout .product-item {
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            flex: 0 0 300px;
        }

        .horizontal-layout .product-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
        }

        .product-item img {
            width: 100%;
            height: auto;
        }

        .right-column {
            flex: 0 0 350px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: #333333;
            padding: 20px;
        }

        .right-column h3 {
            color: #2575fc;
        }

        .facility-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .facility-item {
            display: flex;
            align-items: center;
            background: #f9f9f9;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex: 1 1 calc(50% - 20px);
        }

        .facility-item i {
            color: #2575fc;
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .facility-item strong {
            font-weight: bold;
            color: #333333;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #2575fc;
            color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .back-to-top:hover {
            background: #6a11cb;
        }
    </style>
</head>

<body>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Fasilitas</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?= base_url('home/beranda')?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('home/galeri')?>">Galeri</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="horizontal-layout">
                <?php foreach ($fasilitas as $uu) { ?>
                <div class="product-item">
                    <a href="<?= base_url('assets/upload/fasilitas/'.$uu['foto']) ?>" data-toggle="lightbox">
                        <img src="<?= Base_url('assets/upload/fasilitas/'.$uu['foto'])?>" alt="Fasilitas">
                        <div class="text-center p-4">
                            <h5 class="text-dark"><?= $uu['judul'] ?></h5>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= Base_url('assets/foody/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= Base_url('assets/foody/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= Base_url('assets/foody/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= Base_url('assets/foody/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= Base_url('assets/foody/js/main.js') ?>"></script>
</body>

</html>
