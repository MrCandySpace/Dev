<?php

// Cookie
function login($login, $pwd)
{
    if ($login == "admin@gmail.com" && $pwd == "1234") {
        $_SESSION['user'] = $login;
        setcookie('user', $login);
        return $login;
    } else {
        return false;
    }
}

//Si la connexion à réussie
$user = login($_POST['email1'], $_POST['password1']);
if ($user) // ----- Actuellement non sécurisé : sera changer une fois MySQL établie 
{
    include("pages/connexionFormConfirmation.php");
    // header("Location: index.php?page=connexionForm");
} else //si la connexion à échouer, j'affiche un message d'erreur
{
    include("pages/loginrefus.php");
}

/*
if ($_SESSION['user']) {
    include('pages/connexionFormConfirmation.php');
}
*/