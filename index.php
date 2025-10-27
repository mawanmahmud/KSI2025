<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - KSI2025</title>
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
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="tentang.php">Tentang</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <div class="container mt-5">
        <h3 class="text-center mb-4 text-primary">Data Mahasiswa</h3>
        <table class="table table-bordered table-hover shadow-sm">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = [
                    ["Sela Wissi Yani", "23753036", "Teknologi Informasi"],
                    ["Mawan Mahmud", "23753023", "Teknologi Informasi"],
                    ["Budi Santoso", "23753099", "Teknik Komputer"]
                ];
                $no = 1;
                foreach ($data as $mhs) {
                    echo "<tr>
                            <td class='text-center'>$no</td>
                            <td>{$mhs[0]}</td>
                            <td>{$mhs[1]}</td>
                            <td>{$mhs[2]}</td>
                          </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="footer bg-primary text-white text-center py-3 mt-5">
        &copy; <?= date("Y"); ?> KSI2025 | Dibuat dengan ❤️ oleh Mahasiswa TI
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
