<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "shop_db");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $studio = $_POST['studio'];
    $theme = $_POST['theme'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $background = $_POST['background'];

    // Query untuk menyimpan data ke dalam database
    $query = "INSERT INTO reservations (theme, name, date, day, time, background) VALUES ('$theme', '$name', '$date', '$day', '$time', '$background')";

    if ($conn->query($query) === TRUE) {
        // Membuat pesan WhatsApp yang lebih sederhana
        $message = "
*Reservasi Baru Diterima* 
*Studio*: $studio
*Sesi*: ${theme}
*Nama Pemboking*: ${name}
*Tanggal*: ${date}
*Hari*: ${day}
*Waktu*: ${time}
*Background Pilihan*: ${background}

Akan segera diproses. Terima kasih! 
";

        // Nomor WhatsApp tujuan (Ganti dengan nomor Anda)
        $phoneNumber = "6282298853910"; // Ganti dengan nomor WhatsApp Anda
        $whatsappURL = "https://wa.me/$phoneNumber?text=" . urlencode($message);

        // Arahkan pengguna ke WhatsApp dengan pesan yang telah disiapkan
        header("Location: $whatsappURL");
        exit(); // pastikan script berhenti setelah header untuk menghindari output lainnya
    } else {
        echo "Gagal: " . $conn->error;
    }

    $conn->close();
}
?>
