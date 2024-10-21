<?php
session_start();
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "seminar"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek jika ada id yang dikirimkan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data pendaftaran
    $delete = $conn->query("UPDATE registration SET is_deleted = 1 WHERE id = $id"); // Asumsi is_deleted = 1 untuk menghapus

    if ($delete) {
        echo "<h2>Hapus berhasil!</h2>";
        echo "<a href='admin.php' class='btn btn-primary'>Kembali ke Admin</a>";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
