<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "prakwebdb";

$koneksi = mysqli_connect($host, $user, $password, $database);

// if (!$koneksi) {
//     die("Koneksi database gagal: " . mysqli_connect_error());
// }

// $sql = "CREATE TABLE user (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// username VARCHAR(50) NOT NULL,
// password VARCHAR(50) NOT NULL
// )";

// if (mysqli_query($koneksi, $sql)) {
//     echo "Data berhasil ditambahkan";
// } else {
//     echo "Gagal memasukkan data: " . mysqli_error($koneksi);
// }

?>