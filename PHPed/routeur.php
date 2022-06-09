<?php

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case "contact":
            include("pages/contact.php");
            break;
        case "esp":
            include("pages/esp.php");
            break;
        case "connexion":
            include("pages/connexion.php");
            break;
        case "contactForm":
            include("controllers/contactForm.php");
            break;
        case "connexionForm":
            include("controllers/connexionForm.php");
            break;
        case "deconnexionForm":
            include("controllers/deconnexionForm.php");
        default:
            include("pages/404.php");
            break;
    }
} else {
    include("pages/acceuil.php");
}
