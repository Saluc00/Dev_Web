<?php
    $dbuser = 'root'; // Nom compte de connexion à la DB
    $dbpswd = 'root'; // MDP de connexion à la DB
    $dbhost = 'localhost'; // address pour accèder à la DB
    $dbname = 'projetchat'; // Nom compte de la DB

    $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbuser, $dbpswd);
    // Connexion à la DB
?>