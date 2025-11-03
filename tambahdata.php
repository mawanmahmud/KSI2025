<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nim  = $_POST['nim'];

    $sql = "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="text" name="nim" placeholder="NIM" required><br>
    <button type="submit" name="simpan">Simpan</button>
</form>
