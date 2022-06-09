<?php

//Si la connexion à réussie
if ($_POST['email1'] == 'admin@gmail.com' && $_POST['password1'] == '1234') // ----- Actuellement non sécurisé : sera changer une fois MySQL établie 
{
    $user = $_POST['email1']; //Je stock les eléments de sessions
    $password1 = $_POST['password1'];
    $_SESSION['user'] = $user; //On crée une vraiable de session avec la clé user 
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