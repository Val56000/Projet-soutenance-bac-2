<?php

function verifAcces(){
$bdd = new PDO('mysql:host=localhost;dbname=alesi_test;charset=utf8', 'root', '');
   
$reqUsers = $bdd->prepare('SELECT role FROM roles,user WHERE user.id_user = roles.id_role AND user.username = ?');
$reqUsers->execute(array($_SESSION['username']));


while($donnees = $reqUsers->fetch()){
    if ($donnees['role'] != "administrateur"){

header('Location: /projet_defis/views/notAccess.html');
    }

    
    
    }
}
    
    ?>