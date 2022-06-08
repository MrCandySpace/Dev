<?php


if($_POST['email1'] == 'admin@gmail.com' && $_POST['password1'] == '1234'){
    $email1 = $_POST['email1'];
    $password1 = $_POST['password1'];
    include("pages/connexionFormConfirmation.php");
} else {
    include("pages/loginrefus.php");
}



