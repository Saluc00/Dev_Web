<?php

class tchat {

    // Création d'une methode qui insert les messages dans la BDD
    static function Insert_Message()
    {

        global $db;

        if(!empty($_POST)) {
            if(isset($_POST['messagebutton'])) {
                if (isset($_POST['content']) && !empty($_POST['content'])) {
                
                    $idPage = $_GET['id'];
                    debug($idPage);
                    $req = $db->prepare('INSERT INTO message (username, content, fk_salon_id) VALUE (?, ?, ?)');
                    $req->execute([$_SESSION['pseudo'],$_POST['content'],$idPage]);
                }
            }
            else {
                echo '<p><strong>Vous devez renseigner un pseudo et un message ! :O</strong> </p>';
            }
        }
    }
    // Création d'une methode qui insert les salons dans la BDD
    static function Insert_Salon() 
    {

        global $db;
        if(isset($_POST['salonbutton'])) {
            if (isset($_POST['salon']) && !empty($_POST['salon'])) {

                $req = $db->query('INSERT INTO salons (salon_nom) VALUE (\''.$_POST['salon'].'\')');        
                
            }
        }
    }
}