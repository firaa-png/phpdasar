<!DOCTYPE html>
<html>
<head>
    <title>POST</title>
</head>
<body>
<?php if ( isset ( $_POST["submit  "])) :?>
<h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>
<form action="latihan4.php" method="post">
    Masukkkan nama : 
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">kirim!</</button>
</form>


</body>
</html>