<?php 
// $_GET
$Siswa =[
    [
        "nama"    => "Zafira Rofiqotul Qiptiyah",
        "nrp"     => "04738925",
        "email"   => "zafira@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar"  => "foto1.jpeg"
    ],
    [
        "nama"    => "Nabila Rania Putri",
        "nrp"     => "03754399",
        "email"   => "nabila@gmail.com",
        "jurusan" => "Desain Komunikasi Visual",
        "gambar"  => "foto2.jpeg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <ul>    <?php foreach( $Siswa as $s ): ?>
        <li>
         <a href="latihan2.php?nama=<?=$s["nama"];?>%nrp=<?= $s["nrp"];?>&email=<?= $s["email"];?>&jurusan=<?= $s["jurusan"];?>"><?= $s["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>