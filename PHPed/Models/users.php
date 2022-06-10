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


/**
 * Retourne un utilisateur suivant son login et son mot de passe 
 */
function getUsersByLogin($login, $pwd)
{
    $bdd = connection();
    $sql = "SELECT * 
        FROM `users` 
        WHERE name=? 
        AND password=?";

    // Sécurisation du code -> anti-injection 
    $requete = $bdd->prepare($sql); //préparation de la requête
    $requete -> execute([$login,$pwd]); //execution de la requête en passant 2 paramètres
    
    return $requete->fetchAll();
}

