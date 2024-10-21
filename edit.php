<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "seminar"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Logika untuk menampilkan data yang akan diedit
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM registration WHERE id = $id AND is_deleted = 0";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
}

// Logika untuk menyimpan perubahan
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $institution = $_POST['institution'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    $sql = "UPDATE registration SET email = '$email', name = '$name', institution = '$institution', country = '$country', address = '$address' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate.";
        header("Location: admin.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Peserta Seminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Header Seminar -->
        <header class="my-4">
            <h1>Edit Data Peserta Seminar</h1>
        </header>

        <!-- Form Edit Data -->
        <h2>Edit Data</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="institution" class="form-label">Institusi</label>
                <input type="text" class="form-control" id="institution" name="institution" value="<?php echo $row['institution']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Negara</label>
                <input type="text" class="form-control" id="country" name="country" value="<?php echo $row['country']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" id="address" name="address" rows="3" required><?php echo $row['address']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Simpan Perubahan</button>
            <a href="admin.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
