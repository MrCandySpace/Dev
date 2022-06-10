<?php 

require_once("Models/Users.php");

createUser($_POST['user'], $_POST['pwd']);

header("Location: index.php?page=utilisateurs");

