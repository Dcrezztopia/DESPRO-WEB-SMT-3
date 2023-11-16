<?php
if (isset($_FILES['file'])){
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size =$_FILES['file']['size'];
    $file_tmp =$_FILES['file']['tmp_name'];
    $file_type=$_FILES['file']['type'];
    @$file_ext = strtolower("".end(explode('.', $_FILES['file']['name'])). "");
    $extensions = array("jpg", "jpeg", "png", "js");
    if(in_array($file_ext, $extensions)=== false){
        $errors[]="extension yang diijinkan adalah PDF or DOC file.";
    }

    if($file_size > 2097152){
        $errors[]='File size terlalu besar.';
    }
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"documents/".$file_name);
        echo "File berhasil diunggah";
    } else{
        echo implode(" ", $errors);
    }
}
?>