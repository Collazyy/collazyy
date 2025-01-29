<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Tema - Konsultasi dan Reservasi</title>
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
            overflow-x: hidden;
        }

        /* Theme Section */
        .theme-section {
            padding: 120px 20px 20px;
            background-color: #708090; /* Slate Gray */
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center vertically */
            align-items: center; /* Center horizontally */
            min-height: calc(100vh - 100px);
            overflow-y: auto;
        }

        /* Membesarkan ukuran teks untuk KAAYA SELF PHOTO STUDIO */
        .section-title {
            font-size: 36px; /* Perbesar ukuran font dari 28px menjadi 36px */
            font-weight: bold;
            color: #fff;
            margin-bottom: 40px;
        }

        /* Membesarkan ukuran teks untuk PILIHAN TEMA */
        h3 {
            font-size: 24px; /* Ukuran font yang diperbesar */
            color: #FFD700; /* Warna teks yang lebih cerah */
            margin: 30px 0 15px; /* Margin atas untuk memindahkan teks ke bawah */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Tambahan efek bayangan */
        }

        .theme-card {
            background-color: #000;
            border-radius: 5px;
            padding: 20px;
            width: 80%;
            max-width: 900px;
            height: auto;
            display: flex; /* Use flexbox for horizontal layout */
            align-items: flex-start; /* Align items at the start */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }

        .theme-card img {
            width: 35%; /* Set image width */
            height: auto; /* Maintain aspect ratio */
            border-radius: 5px;
            object-fit: cover; /* Ensure the image covers the area */
            margin-right: 20px; /* Space between image and text */
        }

        .theme-card-content {
            flex: 1; /* Allow content to take remaining space */
            display: flex; /* Use flexbox for vertical alignment */
            flex-direction: column; /* Align items vertically */
            justify-content: center; /* Center items vertically */
            align-items: center; /* Center horizontally */
            text-align: center; /* Center text horizontally */
            height: 100%; /* Ensure it takes full height */
        }

        .theme-card h3 {
            font-size: 24px; /* Ukuran font yang diperbesar */
            margin: 70px 0 30px; /* Tambahkan margin untuk memindahkan teks ke bawah */
            color: #FFD700; /* Warna teks yang lebih cerah */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Tambahan efek bayangan */
        }

        .theme-card p {
            font-size: 16px;
            color: #fff;
            margin: 20px 0 30px; /* Tambahkan margin atas untuk memindahkan teks ke bawah */
            line-height: 1.5;
            text-align: center;
        }

        .booking-button {
            display: inline-block; /* Make it an inline block */
            background-color: #FFD700; /* Button color */
            color: #333; /* Text color */
            padding: 12px 25px; /* Padding */
            border-radius: 5px; /* Rounded corners */
            text-align: center; /* Center text */
            margin-top: 75px; /* Tambahkan margin atas untuk memindahkan tombol ke bawah */
            text-decoration: none; /* Remove underline */
            transition: background-color 0.3s, transform 0.3s; /* Smooth transition */
            font-weight: bold; /* Bold text */
        }

        .booking-button:hover {
            background-color: #A87B50; /* Change color on hover */
            transform: scale(1.05); /* Slightly enlarge button on hover */
        }

        /* Tambahan untuk Pilihan Tema (Gambar Kotak) */
        .theme-options {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .theme-option {
            background-color: #C69C74;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            width: 120px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .theme-option:hover {
            background-color: #A87B50;
        }

        .theme-option.active {
            background-color: #8C6239;
        }

        /* @media untuk layar lebih besar dari 1200px (misalnya, desktop besar) */
@media (min-width: 1200px) {
    .theme-section {
        padding: 100px 30px 30px;
    }

    .theme-card {
        width: 60%;
    }

    .theme-card img {
        width: 40%;
    }

    .theme-card-content {
        padding-left: 30px;
    }
}

/* @media untuk tablet (768px hingga 1024px) */
@media (max-width: 1024px) {
    .theme-section {
        padding: 80px 20px;
    }

    .theme-card {
        width: 90%;
        flex-direction: column;
        align-items: center;
    }

    .theme-card img {
        width: 60%;
        margin-bottom: 20px;
    }

    .theme-card-content {
        text-align: center;
        padding: 10px;
    }

    .theme-options {
        flex-wrap: wrap;
        justify-content: space-around;
    }
}

/* @media untuk layar lebih kecil (480px hingga 767px) */
@media (max-width: 767px) {
    .theme-section {
        padding: 60px 10px;
    }

    .section-title {
        font-size: 28px;
    }

    h3 {
        font-size: 20px;
    }

    .theme-card {
        width: 100%;
        margin-bottom: 20px;
    }

    .theme-card img {
        width: 80%;
    }

    .theme-card-content {
        text-align: center;
    }

    .booking-button {
        width: 100%;
        padding: 15px;
    }

    .theme-options {
        flex-direction: column;
        align-items: center;
    }
}

/* @media untuk layar sangat kecil (misalnya, ponsel dengan lebar kurang dari 480px) */
@media (max-width: 480px) {
    .section-title {
        font-size: 24px;
    }

    h3 {
        font-size: 18px;
    }

    .theme-section {
        padding: 50px 10px;
    }

    .theme-card {
        width: 100%;
        margin-bottom: 10px;
    }

    .theme-card img {
        width: 90%;
    }

    .theme-card-content {
        padding: 5px;
    }

    .booking-button {
        font-size: 14px;
        padding: 10px;
    }
}

    </style>
</head>
<body>
<?php include 'header.php'; ?>

    <!-- PHP untuk menentukan tema yang aktif -->
    <?php
    // Tangkap parameter tema dari URL, jika ada
    $selectedTheme = isset($_GET['theme']) ? $_GET['theme'] : 'all';
    ?>

    <!-- Theme Section -->
    <section class="theme-section">
        <h2 class="section-title">KAAYA SELF PHOTO STUDIO</h2>
        <h3>PILIHAN TEMA</h3>
        
        <!-- Pilihan Tema Gambar Kotak -->
        <div class="theme-options">
    <a href="semua_tema.php?theme=all" class="theme-option <?php echo $selectedTheme == 'all' ? 'active' : ''; ?>">Semua Tema</a>
    <a href="tema_white.php?theme=white" class="theme-option <?php echo $selectedTheme == 'white' ? 'active' : ''; ?>">White</a>
    <a href="tema_ocean_green.php?theme=ocean_green" class="theme-option <?php echo $selectedTheme == 'ocean_green' ? 'active' : ''; ?>">Ocean Green</a>
    <a href="tema_baby_pink.php?theme=baby_pink" class="theme-option <?php echo $selectedTheme == 'baby_pink' ? 'active' : ''; ?>">Baby Pink</a>
    <a href="tema_brown.php?theme=brown" class="theme-option <?php echo $selectedTheme == 'brown' ? 'active' : ''; ?>">Brown</a>
    <a href="tema_little_blue.php?theme=little_blue" class="theme-option <?php echo $selectedTheme == 'little_blue' ? 'active' : ''; ?>">Little Blue</a>
    <a href="tema_grey.php?theme=grey" class="theme-option <?php echo $selectedTheme == 'grey' ? 'active' : ''; ?>">Grey</a>
    <a href="background2.php?theme=background2" class="theme-option <?php echo $selectedTheme == 'background2' ? 'active' : ''; ?>">Background 2</a>
    <a href="photobox.php?theme=photobox" class="theme-option <?php echo $selectedTheme == 'photobox' ? 'active' : ''; ?>">PhotoBox</a>
</div>


        <!-- Tema Cards -->
        <div class="theme-card">
            <img src="img/AY.png" alt="Tema 1">
            <div class="theme-card-content">
                <h3>Brown</h3>
                <p>Jadikan momen keluarga Anda lebih berharga dengan sesi foto bersama.</p>
                <a href="booking.php?theme=me_time" class="booking-button">Booking Sekarang</a>
            </div>
        </div>
        <div class="theme-card">
            <img src="img/AY.png" alt="Tema 2">
            <div class="theme-card-content">
                <h3>Brown</h3>
                <p>Rayakan persahabatan sejati dengan sesi foto yang penuh cinta dan keceriaan.</p>
                <a href="booking.php?theme=bestie" class="booking-button">Booking Sekarang</a>
            </div>
        </div>
        <div class="theme-card">
            <img src="img/AY.png" alt="Tema 2">
            <div class="theme-card-content">
                <h3>Brown</h3>
                <p>Rayakan persahabatan sejati dengan sesi foto yang penuh cinta dan keceriaan.</p>
                <a href="booking.php?theme=bestie" class="booking-button">Booking Sekarang</a>
            </div>
        </div>
        
    </section>

<?php include 'footer.php'; ?>
</body>
</html>
