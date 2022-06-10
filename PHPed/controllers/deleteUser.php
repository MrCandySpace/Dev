<?php 

require_once("Models/users.php");

deleteUser($_GET["id"]);

header("Location: index.php?page=utilisateurs");

