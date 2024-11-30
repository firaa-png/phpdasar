<?php
$mahasiswa = [
   ["Zafira Rofiqotul Qiptiyah", "043040023", "Teknik Informatika", "zafira@gmail.com"],
   ["Nabila Rania Putri", "033040023", "Teknik Industri", "nabila@gmail.com"],
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP  : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email :<?= $mhs[3]; ?></li>

</ul>
<?php endforeach; ?>

</body>
</html>