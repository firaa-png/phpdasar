<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// Ambil data mahasiswa untuk ditampilkan pada halaman pertama kali
$mahasiswa = query("SELECT * FROM mahasiswa");

// Cek jika form pencarian disubmit
if (isset($_POST["keyword"])) {
    // Panggil fungsi cari dan ambil hasil pencarian berdasarkan keyword
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 60px;
            position: absolute;
            top: 120px;
            z-index: -1;
            display: none;
        }

        @media print {
            .logout, .tambah, .form-cari, .aksi {
             display: none;
             }
        }
    </style>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

<a href="logout.php" class="logout">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>
<br><br>

<!-- Form Pencarian dengan oninput -->
<form action="" method="post" class="form-cari">

    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

    <img src="img/loader.gif" class="loader">
</form>

<br>
<div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th class="aksi">Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Nrp</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row ): ?>
        <tr>
            <td><?= $i; ?></td>
            <td class="aksi">
            <a href="ubah.php?id=<?= $row['Id']; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row['Id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">hapus</a>
            </td>
            
            <td><img src="img/<?= $row["Gambar"]; ?> " width="50px"></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Nrp"]; ?></td>
            <td><?= $row["Email"]; ?></td>
            <td><?= $row["Jurusan"]; ?></td>
        </tr> 
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</div>

</body>
</html>
