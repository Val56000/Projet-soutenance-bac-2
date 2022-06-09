<?php
session_start();


//connection à la bdd
require('C:\xampp\htdocs\projet_defis\_config\connect_bdd.php');


//On prépare la requete avec delete et on passe en argument le 'username' indiqué par l'utilisateur à la connexion
$bdd->prepare("DELETE FROM user WHERE username = ? ")->execute(array($_SESSION['username'])) ;

if ($bdd == true){
    header("Location: /projet_defis/views/home_view.html");
    exit;
}


?>