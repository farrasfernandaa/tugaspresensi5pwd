<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "seminar"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$email = $_POST['email'];
$name = $_POST['name'];
$institution = $_POST['institution'];
$country = $_POST['country'];
$address = $_POST['address'];

// Siapkan dan jalankan query
$stmt = $conn->prepare("INSERT INTO registration (email, name, institution, country, address) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $email, $name, $institution, $country, $address);

if ($stmt->execute()) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>