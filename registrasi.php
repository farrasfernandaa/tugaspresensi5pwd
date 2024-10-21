<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Seminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@700&display=swap" rel="stylesheet"> <!-- Link font Franklin Gothic -->
    <style>
        /* General background for the entire page */
        body {
            background-color: #f5f5f5;
        }

        /* Header styling */
        .header-container {
            background-color: rgba(255, 255, 255, 0.8); /* White with transparency */
            border-radius: 15px;
            padding: 20px;
            position: relative;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Shadow for depth */
            margin-bottom: 20px;
            backdrop-filter: blur(10px); /* Added blur effect for background */
        }

        /* Styling for header text */
        .header-container h1 {
            color: black; /* Set text color to black */
            font-family: 'Frank Ruhl Libre', sans-serif; /* Use Franklin Gothic font */
            font-weight: bold; /* Make font bold */
            text-align: center;
        }

        /* Container for form */
        .form-container {
            background-color: rgba(255, 255, 255, 0.9); /* White with more opacity */
            border-radius: 15px;
            padding: 30px;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px); /* Added blur effect for background */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Shadow for depth */
            background-image: url('travel.jpg'); /* Correctly set the background image */
            background-size: cover; /* Cover the entire container */
            background-position: center; /* Center the background image */
        }

        /* Styling for form fields */
        .form-container .form-control, 
        .form-container button {
            z-index: 1;
            position: relative;
            color: black; /* Set text color to black */
            font-weight: bold; /* Make input text bold */
        }

        /* Set color of labels */
        .form-container .form-label {
            color: black; /* Set label color to black */
            font-weight: bold; /* Make label text bold */
        }

        /* Styling for checkbox label */
        .form-check-label {
            font-weight: bold; /* Make checkbox label bold */
        }

        /* Button styling */
        .btn-primary {
            background-color: red; /* Change button color to red */
            border-color: red; /* Change border color to red */
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: darkred; /* Darker red on hover */
            border-color: darkred; /* Darker red border on hover */
        }

        /* Responsive design for mobile */
        @media (max-width: 768px) {
            .form-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid text-center">
        <div class="header-container">
            <h1 class="display-6">REGISTRASI SEMINAR 9th YEARS GG COFFEE & EATERY WORLD TOUR</h1>
        </div>
    </div>
        
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="registrasi.php">Registrasi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <section class="container my-4 d-flex justify-content-center">
        <div class="form-container w-50 p-4">
            <form class="row g-3" action="proses_registrasi.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="email@email.com" aria-label=".form-control-lg example" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nama Lengkap" aria-label="default input example" required>
                </div>
                <div class="mb-3">
                    <label for="institution" class="form-label">Institusi</label>
                    <input class="form-control form-control-sm" type="text" id="institution" name="institution" placeholder="Nama institusi" aria-label=".form-control-sm example">
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Negara</label>
                    <input class="form-control form-control-sm" type="text" id="country" name="country" placeholder="Masukkan Negara" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Alamat Lengkap"></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Saya Setuju dan Siap Menyukseskan Kegiatan Ini
                    </label>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
