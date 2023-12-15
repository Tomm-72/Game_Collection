<?php
    require_once ('vendor/autoload.php');
    require_once ('controllers/home_page.php');

    if (isset($_GET['page']) && $_GET['page'] != '') {
        switch ($_GET['page']) {
            case 'acceuil':
                homepage();
                break;
            default:
                break;
        }
    }
    
?>