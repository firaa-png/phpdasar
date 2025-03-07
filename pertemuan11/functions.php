<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($Id)
{
    global $conn;
    // Pastikan Anda melindungi query dengan prepared statements atau escaping agar terhindar dari SQL Injection
    $query = "DELETE FROM mahasiswa WHERE Id = '$Id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function submit($data) 
{
    global $conn;

    $nama = htmlspecialchars($data["Nama"]);
    $nrp = htmlspecialchars($data["Nrp"]);
    $email = htmlspecialchars($data["Email"]);
    $jurusan = htmlspecialchars($data["Jurusan"]);
    $gambar = htmlspecialchars($data["Gambar"]);
    
    $query = "INSERT INTO mahasiswa
                VALUES
              ('','$nama', '$nrp', '$email', '$jurusan', '$gambar')
              ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;

    $Id = $data["id"];

    $nama = htmlspecialchars($data["Nama"]);
    $nrp = htmlspecialchars($data["Nrp"]);
    $email = htmlspecialchars($data["Email"]);
    $jurusan = htmlspecialchars($data["Jurusan"]);
    $gambar = htmlspecialchars($data["Gambar"]);
    
    $query = "UPDATE mahasiswa SET
                Nama = '$nama',
                Nrp = '$nrp',
                Email = '$email',
                Jurusan = '$jurusan',
                Gambar = '$gambar'
              WHERE Id = '$Id'
                ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>