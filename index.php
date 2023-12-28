<?php
    require_once ('vendor/autoload.php');

    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'accueil':
                require_once ('controllers/home_page.php');
                break;
            case 'connexion':
                require_once ('controllers/connexion_page.php');
                break;
            case 'inscription':
                require_once ('controllers/inscription_page.php');
                break;
            default:
                header('Location: connexion');
        }
    }
?>