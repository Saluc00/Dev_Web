<?php 

class deco {

    static function Deconnexion_Compte()
    {
        unset($_SESSION);

        session_destroy();
        header ('location: index.php');
    }
}