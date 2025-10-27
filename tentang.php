<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - KSI2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">KSI2025</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="tentang.php">Tentang</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        <h3 class="text-center text-primary mb-4">Tentang Website</h3>
        <div class="card shadow p-4">
            <p>Website ini dibuat sebagai bagian dari tugas <strong>KSI 2025</strong> untuk menampilkan data mahasiswa menggunakan <em>PHP Native</em> dan <em>Bootstrap 5</em>.</p>
            <p>Website ini memiliki tampilan sederhana dengan struktur yang mudah dipahami oleh pemula. Diharapkan proyek ini dapat menjadi dasar untuk pengembangan aplikasi web selanjutnya.</p>
            <p><strong>Fitur:</strong></p>
            <ul>
                <li>Menampilkan data mahasiswa dengan tabel Bootstrap</li>
                <li>Desain responsif</li>
                <li>Struktur folder rapi</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-primary text-white text-center py-3 mt-5">
        &copy; <?= date("Y"); ?> KSI2025 | Dibuat oleh Mahasiswa TI
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
