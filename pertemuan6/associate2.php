<?php
// $_GET
$siswa = [
    [
        "nis"     => "04738925",
        "nama"    => "Zafira Rofiqotul Qiptiyah",
        "email"   => "zafira@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar"  => "foto1.jpeg"
    ],
    [
        "nis"     => "03754399",
        "nama"    => "Nabila Rania Putri",
        "email"   => "nabila@gmail.com",
        "jurusan" => "Desain Komunikasi Visual",
        "gambar"  => "foto2.jpeg"
    ]
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>GET</title>
</head>

<body>
    <h1>Daftar Siswa</h1>

        <?php foreach ($siswa as $s):?>
        <ul>
            <li>
                <img src="img/<?= $s["gambar"]; ?>" width="200px">
            </li>
            <li>Nama    : <?= $s["nama"]; ?></li>
            <li>NRP     : <?= $s["nis"]; ?></li>
            <li>Email   : <?= $s["jurusan"]; ?></li>
            <li>Jurusan : <?= $s["email"]; ?></li>
        </ul>
        <?php endforeach; ?>

    </body>
    </html>