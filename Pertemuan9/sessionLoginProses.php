<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5 ($_POST['password']);

$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
$result = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($result);

if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    echo "Anda berhasil login, silahkan menuju ";
    ?>
    <a href="homeSession.php">Halaman Home</a> 
    <?php
} else{
    echo "Gagal login, silahkan login lagi "; ?>
    <a href="sessionLoginForm.html"></a>
    <?php
    echo mysqli_error($koneksi);
}
?>