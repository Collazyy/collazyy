<style>
    /* Navbar */
.navbar {
    background-color: #111; /* Dark background for a sleek look */
    padding: 15px 40px;
    height: 80px;
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
}

.logo-image {
    height: 200px; /* Adjusted logo size */
    width: auto;
    transition: transform 0.3s ease;
}

.logo-image:hover {
    transform: scale(1.1); /* Slightly enlarge logo on hover */
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
    font-size: 18px;
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.navbar .nav-links a:hover {
    background-color: #007bff;
    color: #fff;
    transform: translateY(-3px); /* Slight hover effect */
}

/* Three dots button */
.three-dots {
    font-size: 30px;
    color: #fff;
    cursor: pointer;
    display: none;
    transition: color 0.3s ease;
}

.three-dots:hover {
    color: #007bff;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .navbar .nav-links {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #111;
        flex-direction: column;
        text-align: center;
        padding: 15px 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        transition: max-height 0.3s ease;
        max-height: 0;
        overflow: hidden;
    }

    .navbar .nav-links li {
        margin-left: 0;
        margin-bottom: 15px;
    }

    .three-dots {
        display: block;
    }

    .navbar .nav-links.active {
        display: flex;
        max-height: 300px; /* Ensures menu appears smoothly */
    }

    .navbar .nav-links a {
        font-size: 22px; /* Bigger text for mobile */
        padding: 12px 20px;
    }
}

/* Small mobile screens */
@media (max-width: 480px) {
    .navbar .nav-links a {
        font-size: 20px; /* Adjust font size */
        padding: 10px 15px;
    }
}

/* Medium mobile screens (tablets) */
@media (max-width: 1024px) {
    .navbar .nav-links {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #111;
        flex-direction: column;
        text-align: center;
        padding: 15px 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        transition: max-height 0.3s ease;
        max-height: 0;
        overflow: hidden;
    }

    .navbar .nav-links li {
        margin-left: 0;
        margin-bottom: 15px;
    }

    .navbar .nav-links.active {
        display: flex;
        max-height: 300px; /* Ensures smooth transition */
    }

    .navbar .nav-links a {
        font-size: 20px;
        padding: 12px 20px;
    }

    .three-dots {
        display: block;
    }
}

</style>

<!-- Navbar -->
<header>
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">
                <img src="img/AYA.png" alt="Logo Ruang Sesi" class="logo-image">
            </a>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="Semua_Tema.php">Pilihan Tema</a></li>
                <li><a href="booking.php">Photo Studio</a></li>
                <li><a href="https://maps.app.goo.gl/BLpNie97Awq3fG1r9" target="_blank">Lokasi</a></li>
            </ul>
            <!-- Three dots button -->
            <div class="three-dots" onclick="toggleMenu()">&#8942;</div>
        </div>
    </nav>
</header>

<script>
    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active');
    }
</script>
