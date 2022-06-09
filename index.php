<?php

//Inclusion des fichiers principaux
include_once '_config/config.php';
include_once '_config/connect_bdd.php';
include_once '_classes/User.php';






//Définition de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])){
    $page = trim(strtolower($_GET['page'])); //si un utilisateur tape l'url en majuscule accidentellement, cela sera transformé en minuscule / trim enlève les espaces en trop
}
else{
    $page = 'home';
}


//un scan du dossier 'controllers' est fait.
$allPages = scandir('controllers/');

//on execute la condition if et cela va inclure les 3 fichiers et ouvrir logiquement la vue 
if(in_array($page.'_controller.php', $allPages)){

    //Inclusion de la page //
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.html';
    
}

//Si la page n'existe pas ..
else {
    echo 'Erreur 404';
}

?>