<?php
if(isset($_POST["submit"])){
    $targetDirectory = "uploads";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtentions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 5 * 1024 * 1024;
    
    if(in_array($fileType, $allowedExtentions) &&  $_FILES["fileToUpload"]["size"] <= $maxFileSize){
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo("File berhasil diunggah.");
        } else{
            echo("Gagal mengunggah file.");
        }
    } else{
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>