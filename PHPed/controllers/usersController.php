<?php 


require_once("models/users.php");//Model view

// $bdd = connection();
$users = getUsers();

include("pages/utilisateurs.php"); //Model utilisateur

