<?php

include_once '_functions/functions.php';
include_once '_config/config.php';
include_once '_config/db.php';
include_once 'views/includes/head.php';

if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'accueil';
}

// Dossier contenant toutes les pages
$allPages = scandir('controllers/');

if (in_array($page.'_controller.php', $allPages)) {
    // Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {
    // Retour d'une erreur 404 ! El famosso !
    echo '<h1 style="text-align: center; padding: 10vh 0 0 0;">Erreur 404 :(</h1>
    <p style="text-align: center; padding: 3vh 0 0 0;" ><a href="index.php">Revenir à l\'accueil</a></p>';

}
