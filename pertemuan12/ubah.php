<?php
// Mengimpor file functions.php jika ada
require 'functions.php';

// Ambil data di URL
if (isset($_GET["id"])) {
    $Id = $_GET["id"];
}

// Query data mahasiswa berdasarkan id
$row = query("SELECT * FROM mahasiswa WHERE Id ='$Id'")[0];

// Koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // Cek apakah data berhasil diubah atau tidak
    if( Ubah($_POST) > 0) {
            echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
                  </script";
    } else {
        echo "<script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Ubah data Mahasiswa</title>
</head>
<body>
    <h1>Ubah data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $row["Id"]; ?>">
        <ul>
            <li>
                <label for="Nama">NAMA      : </label>
                <input type="text" name="Nama" id="Nama"required value="<?= $row["Nama"]; ?>">
            </li>
            <li>
                <label for="Nrp">NRP        : </label>
                <input type="text" name="Nrp" id="Nrp"value="<?= $row["Nrp"]; ?>">
            </li>
            <li>
                <label for="Email">EMAIL     : </label>
                <input type="text" name="Email" id="Email"value="<?= $row["Email"]; ?>">
            </li>
            <li>
                <label for="Jurusan">JURUSAN : </label>
                <input type="text" name="Jurusan" id="Jurusan"value="<?= $row["Jurusan"]; ?>">
            </li>
            <li>
                <label for="Gambar">GAMBAR   : </label>
                <input type="text" name="Gambar" id="Gambar"value="<?= $row["Gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
</form>
</body>
</html>