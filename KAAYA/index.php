<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Sesi - Konsultasi dan Reservasi</title>
    <style>
  /* Reset dasar untuk margin, padding, dan box-sizing */
  * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f4f4f4;
        }

        /* Navbar */
        .navbar {
            background-color: #000000;
            padding: 10px 40px;
            height: 100px;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
        }

        .logo-image {
            height: 200px;
            width: auto;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
        }

        .navbar .nav-links li {
            margin-left: 30px;
        }

        .navbar .nav-links a {
            font-size: 20px;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            transition: 0.3s;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .navbar .nav-links a:hover {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
        }

        /* Hero Section */
        .hero {
            background-image: url('img/latar.jpeg');
            background-size: cover;
            background-position: center;
            min-height: 700px;
            color: #000000;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #fff;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #fff;
        }

        .hero .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .hero .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Section Deskripsi dengan Video */
        .deskripsi {
            background-color: #1a1a1a;
            padding: 60px 0;
            color: #fff;
        }

        .deskripsi .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .deskripsi-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .deskripsi-teks {
            flex: 1;
            margin-right: 40px;
        }

        .deskripsi h2 {
            font-family: 'Raleway', sans-serif;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .deskripsi p {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            line-height: 1.8;
            color: #ccc;
            margin-bottom: 40px;
        }

        .deskripsi-media {
            display: flex;
            flex-direction: column;
            gap: 20px;
            flex: 1;
            max-width: 100%;
        }

        .deskripsi-video {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .deskripsi-video video {
            width: 100%;
            height: auto;
            aspect-ratio: 16 / 9;
            border-radius: 10px;
        }

        /* Services Section */
        .services {
            padding: 60px 0;
            background-color: #fff;
        }

        .services .container {
            max-width: 1200px;
            margin: auto;
            text-align: center;
        }

        .services h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .service-cards {
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }

        .card {
            background-color: #000;
            border-radius: 5px;
            padding: 20px;
            max-width: 300px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0 10px;
        }

        .card img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .card h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #fff;
        }

        .card p {
            font-size: 16px;
            color: #fff;
        }

        /* Review Section */
        .reviews {
            padding: 60px 0;
            background-color: #000;
            text-align: center;
        }

        .reviews h2 {
            font-size: 36px;
            margin-bottom: 40px;
            color: #fff;
        }

        .review-cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            text-align: center;
        }

        .review-card {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            max-width: 300px;
            text-align: center;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin: 10px;
        }

        .review-card p {
            font-size: 16px;
            color: #000;
            margin-bottom: 10px;
        }

        .review-card h4 {
            font-size: 14px;
            color: #aaa;
        }

        .customer-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .stars {
            margin-top: 10px;
            color: red;
        }

        .stars .fa-star {
            font-size: 20px;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        footer p {
            margin: 0;
        }

        footer .social-links {
            list-style: none;
            display: flex;
        }

        footer .social-links li {
            margin-left: 10px;
        }

        footer .social-links a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            transition: 0.3s;
        }

        footer .social-links a:hover {
            background-color: #007bff;
            border-radius: 5px;
        }

        /* Media Queries */
        @media (max-width: 1024px) {
            .hero h1 {
                font-size: 36px;
                margin-bottom: 15px;
            }

            .hero p {
                font-size: 16px;
                margin-bottom: 15px;
            }

            .deskripsi-content {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .deskripsi-teks {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .deskripsi-media {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }

            .card {
                max-width: 280px;
            }

            .review-cards {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 28px;
                margin-bottom: 10px;
            }

            .hero p {
                font-size: 14px;
                margin-bottom: 20px;
            }

            .services h2 {
                font-size: 28px;
            }

            .service-cards {
                flex-direction: column;
                align-items: center;
            }

            .card {
                max-width: 100%;
                margin-bottom: 20px;
            }

            .review-cards {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }

            .deskripsi-teks, .deskripsi-media {
                margin-bottom: 20px;
            }

            .deskripsi-video {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 24px;
                margin-bottom: 5px;
            }

            .hero p {
                font-size: 12px;
                margin-bottom: 10px;
            }

            .deskripsi h2 {
                font-size: 24px;
            }

            .services h2 {
                font-size: 24px;
            }

            .card {
                max-width: 100%;
            }

            .review-cards {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            footer .container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            footer .social-links {
                justify-content: center;
            }
        }

        @media (min-width: 1200px) {
            .services .container {
                max-width: 1300px;
            }

            .service-cards {
                justify-content: space-between;
            }
        }

    </style>
</head>
<body>


<?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Selamat Datang Di Kaaya Self Photo</h1>
            <p>Tentukan jadwal sesi konsultasi sesuai kebutuhan Anda dengan mudah dan cepat.</p>
            <a href="booking.php" class="btn-primary">PriceList Self Photo</a>
        </div>
    </section>

    <!-- Section Deskripsi dengan Video -->
    <section class="deskripsi">
        <div class="container">
            <div class="deskripsi-content">
                <div class="deskripsi-teks">
                    <h2>Deskripsi</h2>
                    <p>Kami menawarkan berbagai tema foto untuk memuaskan kebutuhan Anda. Dari foto keluarga, foto prewedding, hingga sesi foto pribadi, kami siap membantu Anda mendapatkan hasil terbaik.</p>
                    
                    <p>Kami menawarkan berbagai tema foto untuk memuaskan kebutuhan Anda. Dari foto keluarga, foto prewedding, hingga sesi foto pribadi, kami siap membantu Anda mendapatkan hasil terbaik.</p>
                </div>
                <div class="deskripsi-media">
                    <div class="deskripsi-video">
                        <video controls>
                            <source src="img/kaaya.mp4" type="video/mp4">
                            Video tidak didukung.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2>DOKUMENTASI</h2>
            <div class="service-cards">
                <div class="card">
                    <img src="img/me time.jpg" alt="Tema 1">
                    <h3>ME TIME</h3>
                    <p>Jadikan momen keluarga Anda lebih berharga dengan sesi foto bersama.</p>
                </div>
                <div class="card">
                    <img src="img/bestie.jpg" alt="Tema 2">
                    <h3>BESTIE</h3>
                    <p>Abadikan momen cinta Anda dengan sesi foto yang romantis.</p>
                </div>
                <div class="card">
                    <img src="img/grup.jpg" alt="Tema 3">
                    <h3>MINI GRUP</h3>
                    <p>Untuk kebutuhan foto pribadi yang lebih menonjolkan diri Anda.</p>
                </div>
                <div class="card">
                    <img src="img/mini grup.jpg" alt="Tema 3">
                    <h3>GRUP</h3>
                    <p>Untuk kebutuhan foto pribadi yang lebih menonjolkan diri Anda.</p>
                </div>
            </div>
        </div>
    </section>

   <!-- Review Section -->
   <section class="reviews">
    <h2>CLIENT'S REVIEW</h2>
    <div class="review-cards">
        <div class="review-card">
            <h3>ME TIME</h3>
            <p> Studionya bagus, harganya murahhh banget, waktu yang dikasih menurutku sudah pas untuk foto foto, bahkan terbilang lebih lama dengan harga semurah itu. pelayanannya mantap banget, ramah, kebersihan sangat dijaga. seneng banget bisa foto disini, next kalau main ke daerah sana lagi mau foto lagi. sangat worth it!!! terimakasih kak</p>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
        </div>
        <div class="review-card">
            <h3>Nadia Maulida</h3>
            <p>tempatnya bagus bgt nyaman, hasilnya juga bagus sangat memuaskan</p>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
        </div>
        <div class="review-card">
            <h3>Nur Janah</h3>
            <p>Sangat puas dengan hasil nyaa</p>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        <div class="review-card">
            <h3>rean</h3>
            <p>Studionya rapih, bersih juga dengan harga yang murmer bisa dapet hasil foto yang bagus bgt</p>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
    </div>
</section>

</body>
</html>

<?php include 'footer.php'; ?>
