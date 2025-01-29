<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "shop_db");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Reset otomatis setiap pergantian hari
$currentDate = date('Y-m-d');
$lastResetFile = 'last_reset.txt'; // File untuk menyimpan tanggal terakhir reset

if (!file_exists($lastResetFile) || file_get_contents($lastResetFile) !== $currentDate) {
    // Hapus data booking untuk tanggal yang sudah lewat
    $query = "DELETE FROM reservations WHERE date < '$currentDate'";
    $conn->query($query);

    // Perbarui tanggal terakhir reset
    file_put_contents($lastResetFile, $currentDate);
}

// Ambil waktu yang sudah di-booking dari database
$bookedTimes = [];
if (isset($_GET['date'])) {
    $selectedDate = $_GET['date'];
    $query = "SELECT time FROM reservations WHERE date = '$selectedDate'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $bookedTimes[] = $row['time'];
        }
    }
}

// Kirim data waktu yang sudah di-booking ke JavaScript
echo "<script>const bookedTimes = " . json_encode($bookedTimes) . ";</script>";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #FFD700;
            color: #333;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #C69C74;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Form Reservasi</h1>
        <form id="bookingForm" method="POST" action="process_reservation.php">
            <label for="studio">Pilih Studio</label>
            <select id="studio" name="studio" required onchange="updateBackgroundOptions()">
                <option value="" disabled selected>Pilih Studio</option>
                <option value="studio1">Studio 1</option>
                <option value="studio2">Studio 2</option>
            </select>

            <label for="theme">Pilih Sesi</label>
            <select id="theme" name="theme" required>
                <option value="" disabled selected>Pilih</option>
                <option value="me_time">Me time</option>
                <option value="bestie">Bestie</option>
                <option value="mini_grup">Mini grup</option>
                <option value="grup">Grup</option>
            </select>

            <label for="name">Nama Pemboking</label>
            <input type="text" id="name" name="name" required>

            <label for="date">Tanggal</label>
            <input type="date" id="date" name="date" required>

            <label for="day">Hari</label>
            <select id="day" name="day" required>
                <option value="" disabled selected>Pilih</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
            </select>

            <label for="time">Jam</label>
            <select id="time" name="time" required>
                <!-- Pilihan waktu akan dimasukkan menggunakan JavaScript -->
            </select>

            <label for="background">Pilih Background</label>
            <select id="background" name="background" required>
                <option value="" disabled selected>Pilih</option>
                <!-- Opsi background akan di-update berdasarkan studio yang dipilih -->
            </select>

            <button type="submit">Kirim Reservasi</button>
        </form>
    </div>

    <script>
        // Fungsi untuk mengisi select time dengan kelipatan 30 menit
        function generateTimeOptions() {
            const timeSelect = document.getElementById("time");
            const startHour = 10; // Mulai jam 10:00
            const endHour = 20; // Hingga jam 20:00

            for (let hour = startHour; hour <= endHour; hour++) {
                const hourFormatted = hour < 10 ? `0${hour}` : `${hour}`;
                const times = [`${hourFormatted}:00`, `${hourFormatted}:30`];

                times.forEach(time => {
                    const option = document.createElement("option");
                    option.value = time;
                    option.textContent = time;

                    // Nonaktifkan waktu yang sudah dipesan
                    if (bookedTimes.includes(time)) {
                        option.disabled = true;
                        option.textContent += " (Booked)";
                    }

                    timeSelect.appendChild(option);
                });
            }
        }

        // Fungsi untuk update opsi background sesuai studio yang dipilih
        function updateBackgroundOptions() {
            const studio = document.getElementById("studio").value;
            const backgroundSelect = document.getElementById("background");

            // Hapus semua opsi background yang ada
            backgroundSelect.innerHTML = '<option value="" disabled selected>Pilih</option>';

            let backgroundOptions = [];

            if (studio === 'studio1') {
                backgroundOptions = ['White', 'Ocean Green', 'Little Blue'];
            } else if (studio === 'studio2') {
                backgroundOptions = ['Grey', 'Brown', 'Baby Pink'];
            }

            // Tambahkan opsi background sesuai studio yang dipilih
            backgroundOptions.forEach(option => {
                const opt = document.createElement("option");
                opt.value = option;
                opt.textContent = option;
                backgroundSelect.appendChild(opt);
            });
        }

        // Panggil fungsi generateTimeOptions ketika halaman dimuat
        generateTimeOptions();
    </script>
</body>
</html>
