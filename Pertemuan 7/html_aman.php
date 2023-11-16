<?php
if(isset($_POST['input'])){
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); 
    echo $input;
} else{
    echo "gaada";
}
echo "<br>";
$email = $_POST['email'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    echo $email;
} else{
    echo "Ada yang salah";
}
?>