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
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px);
            overflow-y: auto;
        }

        .section-title {
            font-size: 36px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 40px;
        }

        h3 {
            font-size: 24px;
            color: #FFD700; 
            margin: 30px 0 15px; 
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
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
            height: 100%; /* Ensure it takes full height */
        }

        .theme-card h3 {
            font-size: 24px; /* Ukuran font yang diperbesar */
            margin-bottom: 20px;
            color: #FFD700; /* Warna teks yang lebih cerah */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .studio-details {
            display: flex;
            justify-content: space-between;
            width: 80%; /* Set a width for proper alignment */
            text-align: left; /* Align text to the left */
            color: #fff;
            margin-bottom: 20px; /* Add space between descriptions and the button */
        }

        .studio {
            width: 45%; /* Each studio takes 45% of the available width */
        }

        .studio-title, p {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .booking-button {
            display: inline-block;
            background-color: #FFD700;
            color: #333;
            padding: 12px 25px;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px; 
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            font-weight: bold;
        }

        .booking-button:hover {
            background-color: #A87B50;
            transform: scale(1.05);
        }

        .theme-options {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .theme-option {
            background-color: #FFD700; /* Warna yang lebih cerah, Gold */
            color: #333; /* Warna teks lebih gelap untuk kontras */
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            width: 120px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            font-weight: bold; /* Membuat teks lebih tebal */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
        }

        .theme-option:hover {
            background-color: #C69C74; /* Warna lebih gelap saat di-hover */
        }

        .theme-option.active {
            background-color: #8C6239;
        }

        /* Styling specific to the Photobox theme */
.photobox-theme .theme-card-content h3 {
    font-size: 18px; /* Smaller font for the Photobox theme title */
}

.photobox-theme .studio-title, .photobox-theme .studio p {
    font-size: 14px; /* Smaller font for the Photobox description */
}

.photobox-theme .booking-button {
    font-size: 12px; /* Smaller font size for the Photobox booking button */
    padding: 8px 16px; /* Adjust padding for smaller text */
}


        /* Media Queries for responsive design */
        @media (max-width: 768px) {
            .theme-card {
                flex-direction: column; /* Stack content vertically */
                width: 90%; /* Allow theme cards to be wider on small screens */
            }

            .theme-card img {
                width: 100%; /* Make images take up full width on small screens */
                margin-right: 0; /* Remove the margin between image and text */
                margin-bottom: 20px; /* Add margin at the bottom for spacing */
            }

            .studio-details {
                flex-direction: column;
                align-items: center;
                width: 100%;
            }

            .studio {
                width: 100%;
                margin-bottom: 20px; /* Add space between studios */
            }

            .theme-options {
                flex-direction: column; /* Stack options vertically on small screens */
                gap: 15px;
            }

            .theme-option {
                width: 80%; /* Make options wider on small screens */
            }

            /* Teks di tengah untuk tampilan mobile */
            .section-title, h3, .theme-option, .studio-title {
                text-align: center; /* Center text on small screens */
            }
        }

        @media (max-width: 480px) {
            .theme-card{
                align-items: center;
            }
            .section-title {
                font-size: 28px; /* Smaller title font for mobile screens */
                margin-bottom: 20px;
                
            }

            .theme-card h3 {
                font-size: 20px; /* Smaller font for theme titles on mobile */
                margin-bottom: 15px;
            }

            .studio-title, p {
                font-size: 16px; /* Adjust font size for better readability on mobile */
            }

            .booking-button {
                font-size: 14px; /* Smaller button font size for mobile */
                padding: 10px 20px;
            }

            .theme-option {
                width: 90%; /* Make theme options take more width on mobile */
            }

            /* Teks di tengah untuk tampilan mobile */
            .section-title, h3, .theme-option, .studio-title {
                text-align: center; /* Center text on mobile screens */
            }
        }

        @media (max-width: 320px) {
            .theme-card{
                align-items: center;
            }
            .section-title {
                font-size: 24px; /* Further reduce title size on very small screens */
            }

            .theme-card h3 {
                font-size: 18px; /* Further reduce theme title size */
            }

            .studio-title, p {
                font-size: 14px; /* Adjust font size for smaller screens */
            }

            .theme-options {
                gap: 10px;
            }

            .theme-option {
                width: 100%; /* Full width for theme options on very small screens */
            }

            /* Teks di tengah untuk tampilan mobile */
            .section-title, h3, .theme-option, .studio-title {
                text-align: center; /* Center text on very small screens */
            }
        }

    </style>
</head>
<body>
<?php include 'header.php'; ?>

    <!-- Theme Section -->
    <section class="theme-section">
        <h2 class="section-title">KAAYA SELF PHOTO STUDIO</h2>
        <h3>PRICE LIST</h3>
        
        <!-- Pilihan Tema Gambar Kotak -->
        <div class="theme-options">
            <a href="#" class="theme-option">ME TIME</a>
            <a href="#" class="theme-option">BESTIE</a>
            <a href="#" class="theme-option">MINI GRUP</a>
            <a href="#" class="theme-option">EKSTRA GRUP</a>
        </div>

        <!-- Tema Card for ME TIME -->
        <div class="theme-card">
            <!-- Image added to the left -->
            <img src="img/me time.jpg" alt="Gambar ME TIME"> <!-- Change this path to your image path -->
            <div class="theme-card-content">
                <h3>ME TIME</h3>
                <div class="studio-details">
                    <div class="studio">
                        <div class="studio-title">STUDIO 1</div>
                        <p>HTM: 20K</p>
                        <p>1 Orng</p>
                        <p>Durasi: 10 Menit</p>
                        <p>Free Soft Copy</p>
                        <p>Free Aksesoris</p>
                        <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
                    </div>
                    <div class="studio">
                        <div class="studio-title">STUDIO 2</div>
                        <p>HTM: 20K</p>
                        <p>1 Orng</p>
                        <p>Durasi: 10 Menit</p>
                        <p>Free Soft Copy</p>
                        <p>Free Aksesoris</p>
                        <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="theme-card">
            <!-- Image added to the left -->
            <img src="img/bestie.jpg" alt="Gambar ME TIME"> <!-- Change this path to your image path -->
            <div class="theme-card-content">
                <h3>Bestie</h3>
                <div class="studio-details">
                    <div class="studio">
                        <div class="studio-title">STUDIO 1</div>
                        <p>HTM: 25K</p>
                        <p>2 Orang</p>
                        <p>Durasi: 15 Menit</p>
                        <p>Foto Sepuasnya</p>
                        <p>Free Soft Copy</p>
                        <p>Free Aksesoris</p>
                        <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
                    </div>
                    <div class="studio">
                        <div class="studio-title">STUDIO 2</div>
                        <p>HTM: 25K</p>
                        <p>2 Orang</p>
                        <p>Durasi: 15 Menit</p>
                        <p>Foto Sepuasnya</p>
                        <p>Free Soft Copy</p>
                        <p>Free Aksesoris</p>
                        <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="theme-card">
            <!-- Image added to the left -->
            <img src="img/grup.jpg" alt="Gambar ME TIME"> <!-- Change this path to your image path -->
            <div class="theme-card-content">
                <h3>Mini Grup</h3>
                <div class="studio-details">
                    <div class="studio">
                        <div class="studio-title">STUDIO 1</div>
                        <p>HTM: 35K</p>
                        <p>3-4 Orang</p>
                        <p>Durasi: 20 Menit</p>
                        <p>Foto Soft Copy</p>
                        <p>Free Aksesoris</p>
                        <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
                    </div>
                    <div class="studio">
                        <div class="studio-title">STUDIO 2</div>
                        <p>HTM: 35K</p>
                        <p>3-4 Orang</p>
                        <p>Durasi: 20 Menit</p>
                        <p>Foto Soft Copy</p>
                        <p>Free Aksesoris</p>
                        <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="theme-card">
            <!-- Image added to the left -->
            <img src="img/mini grup.jpg" alt="Gambar ME TIME"> <!-- Change this path to your image path -->
            <div class="theme-card-content">
                <h3>Grup</h3>
                <div class="studio-details">
                    <div class="studio">
                        <div class="studio-title">STUDIO 1</div>
                        <p>HTM: 45K</p>
                        <p>5-6 orang</p>
                        <p>Durasi: 25 Menit</p>
                        <p>Free Soft Copy</p>
                        <p>Free Aksesoris</p>
                        <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
                    </div>
                    <div class="studio">
                        <div class="studio-title">STUDIO 2</div>
                        <p>HTM: 45K</p>
                        <p>5-6 orang</p>
                        <p>Durasi: 25 Menit</p>
                        <p>Free Soft Copy</p>
                        <p>Free Aksesoris</p>
                        <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
                    </div>
                </div> 
             </div> 
        </div>
        <!-- Photobox Theme Card -->
<div class="theme-card photobox-theme">
    <!-- Image added to the left -->
    <img src="img/mini grup.jpg" alt="Gambar ME TIME">
    <div class="theme-card-content">
        <h3>Photobbox</h3>
        <div class="studio-details">
            <div class="studio">
                <div class="studio-title">STUDIO 1</div>
                <p>HTM: 10k</p>
                <p>1 orang</p>
                <p>Durasi: 7 Menit</p>
                <p>Free Soft Copy</p>
                <p>Free Aksesoris</p>
                <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
            </div>
            <div class="studio">
                <div class="studio-title">STUDIO 2</div>
                <p>HTM: 20K</p>
                <p>2 orang</p>
                <p>Durasi: 7 Menit</p>
                <p>Free Soft Copy</p>
                <p>Free Aksesoris</p>
                <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
            </div>
            <div class="studio">
                <div class="studio-title">STUDIO 2</div>
                <p>HTM: 30k</p>
                <p>3 orang</p>
                <p>Durasi: 10 Menit</p>
                <p>Free Soft Copy</p>
                <p>Free Aksesoris</p>
                <a href="booking_form.php?theme=me_time" class="booking-button">Booking Sekarang</a>
            </div>
        </div>
    </div>
</div>

        

        <!-- Add more theme cards for other themes as needed -->
        
    </section>

<?php include 'footer.php'; ?>
</body>
</html>
