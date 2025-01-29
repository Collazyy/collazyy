<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $theme = htmlspecialchars($_POST['theme']);
    $name = htmlspecialchars($_POST['name']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $background = htmlspecialchars($_POST['background']);

    // Simpan data atau kirim email (sesuaikan dengan kebutuhan)
    echo "<h1>Reservasi Berhasil</h1>";
    echo "<p>Detail Reservasi:</p>";
    echo "<ul>";
    echo "<li>Nama: $name</li>";
    echo "<li>Tema: $theme</li>";
    echo "<li>Tanggal: $date</li>";
    echo "<li>Jam: $time</li>";
    echo "<li>Background: $background</li>";
    echo "</ul>";
} else {
    echo "Akses ditolak.";
}
?>
