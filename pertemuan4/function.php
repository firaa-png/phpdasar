<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <hl><?= salam("Pagi", "Zafira"); ?></hl>
</body>
</html>