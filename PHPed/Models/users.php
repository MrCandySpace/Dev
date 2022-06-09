<?php

function connection()
{
    $user = "root"; //utilisateur de MySQL
    $pass = ""; // mot de passe 
    $dsn = "mysql:host=localhost;dbname=blog"; //Information sur le srveur MySQL
    $bdd = new PDO($dsn, $user, $pass);

    return $bdd;
}


/**
 * Retourne la liste des utilisateurs 
 */

function getUsers()
{
    $bdd = connection(); //Connexion à la base de donnée 
    $reponse = $bdd->query("SELECT * FROM `users`"); //Requête à la base de donnée 
    return $reponse->fetchAll();
}
