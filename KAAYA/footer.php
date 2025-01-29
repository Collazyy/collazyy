<style>
    /* Footer */
footer {
    background-color: #333;
    color: #fff;
    padding: 40px 0;
    font-family: 'Arial', sans-serif;
}

footer .container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    width: 100%;
    padding: 0 20px;
}

.footer-content div {
    flex: 1;
    margin: 0 20px;
}

.footer-content h3 {
    font-size: 22px;
    margin-bottom: 20px;
    color: #fff;
    text-transform: uppercase;
}

.footer-content ul {
    list-style: none;
    padding: 0;
}

.footer-content ul li {
    margin-bottom: 10px;
}

.footer-content ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s, padding-left 0.3s;
}

.footer-content ul li a:hover {
    color: #007bff;
    padding-left: 10px;
}

/* Social Media Section */
.social-media ul {
    display: flex;
    align-items: center;
}

.social-media ul li {
    margin-right: 15px;
    display: flex;
    align-items: center;
}

.social-media ul li i {
    font-size: 18px;
    margin-right: 8px;
    transition: color 0.3s;
}

.social-media ul li a:hover i {
    color: #007bff;
}

/* Footer Bottom */
.footer-bottom {
    text-align: center;
    padding-top: 20px;
    margin-top: 20px;
    border-top: 1px solid #555;
    color: #aaa;
    font-size: 14px;
}

.footer-bottom p {
    margin: 0;
}

/* Responsive */
/* @media untuk layar lebih besar dari 1200px (misalnya, desktop besar) */
@media (min-width: 1200px) {
    .footer-content {
        justify-content: space-between;
    }

    .footer-content div {
        margin: 0 20px;
    }

    .social-media ul {
        justify-content: flex-start;
    }
}

/* @media untuk tablet (768px hingga 1024px) */
@media (max-width: 1024px) {
    .footer-content {
        flex-direction: column;
        align-items: center;
    }

    .footer-content div {
        margin: 10px 0;
    }

    .social-media ul {
        flex-direction: column;
        align-items: center;
    }

    .social-media ul li {
        margin-bottom: 10px;
    }
}

/* @media untuk layar lebih kecil (480px hingga 767px) */
@media (max-width: 767px) {
    .footer-content h3 {
        font-size: 20px;
    }

    .footer-content ul li {
        font-size: 14px;
    }

    .footer-bottom {
        font-size: 12px;
    }

    .footer-content {
        padding: 0 10px;
    }

    .social-media ul li i {
        font-size: 16px;
    }
}

/* @media untuk layar sangat kecil (misalnya, ponsel dengan lebar kurang dari 480px) */
@media (max-width: 480px) {
    footer {
        padding: 30px 0;
    }

    .footer-content h3 {
        font-size: 18px;
    }

    .footer-content ul li a {
        font-size: 12px;
    }

    .footer-bottom {
        font-size: 10px;
    }

    .social-media ul li i {
        font-size: 14px;
    }
}

</style>

<!-- Footer HTML -->
<footer>
    <div class="container">
        <div class="footer-content">
            <!-- Quick Links -->
            <div class="quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="semua_tema.php">Pilihan Tema</a></li>
                    <li><a href="booking.php">Photo Studio</a></li>
                    <li><a href="https://maps.app.goo.gl/BLpNie97Awq3fG1r9" target="_blank">Lokasi</a></li>
                </ul>
            </div>

            <!-- Extra Links -->
            <div class="extra-links">
                <h3>Extra Links</h3>
                <ul>
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="social-media">
                <h3>Follow Our Social Media</h3>
                <ul>
                    <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/kaayaselfphoto?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Instagram</a></li>
                    <li><i class="fa fa-tiktok"></i><a href="https://www.tiktok.com/@kaayaselfphoto?is_from_webapp=1&sender_device=pc">Tiktok</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>Created by Kaaya Self Photo Studio | All Rights Reserved</p>
        </div>
    </div>
</footer>
