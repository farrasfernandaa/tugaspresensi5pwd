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

// Ambil data pendaftaran
$result = $conn->query("SELECT * FROM registration WHERE is_deleted = 0");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Seminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for Admin Table */
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }

        .table {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #343a40;
            color: white;
            text-align: center;
        }

        .table td {
            text-align: center;
        }

        .table-actions a {
            margin-right: 10px;
            text-decoration: none;
        }

        .table-actions a:hover {
            text-decoration: underline;
        }

        .btn-edit {
            color: #007bff;
        }

        .btn-delete {
            color: #dc3545;
        }

        /* Style for footer */
        footer {
            margin-top: 20px;
            text-align: center;
            padding: 10px;
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrasi.php">Registrasi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <h1>Data Pendaftaran</h1>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Institusi</th>
                    <th>Negara</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>{$row['email']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['institution']}</td>
                    <td>{$row['country']}</td>
                    <td>{$row['address']}</td>
                    <td class='table-actions'>
                        <a href='edit.php?id={$row['id']}' class='btn-edit'>Edit</a>
                        <a href='delete.php?id={$row['id']}' class='btn-delete'>Delete</a>
                    </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer>
        <p>&copy; 2024 Seminar 9th YEARS GG COFFEE & EATERY WORLD TOUR. All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$conn->close();
?>
