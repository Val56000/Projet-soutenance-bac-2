<?php
session_start();

function verifAcces(){
$bdd = new PDO('mysql:host=localhost;dbname=alesi_test;charset=utf8', 'root', '');
   
$reqUsers = $bdd->prepare('SELECT role FROM roles,user WHERE user.id_user = roles.id_role AND user.username = ?');
$reqUsers->execute(array($_SESSION['username']));


while($donnees = $reqUsers->fetch()){

    //Code php pour afficher le prénom de l'utilisateur sur la page d'accueil (avec concaténation)
    echo "Bonjour ".$donnees['role']."";
    echo ($donnees['role']);

    if ($donnees['role'] == "administrateur"){
echo 'bjr Val';

header('Location: /projet_defis/views/notAccess.html');
    }

    
    
    }
}
    
    ?>