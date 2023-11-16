<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "praktikdbweb";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// $sql = "CREATE TABLE user (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// username VARCHAR(50) NOT NULL,
// password VARCHAR(50) NOT NULL
// )";

$sql = "INSERT INTO user  VALUES (1, 'admin', '123')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Gagal memasukkan data: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>