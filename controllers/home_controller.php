<?php

include_once 'C:\xampp\htdocs\projet_defis\_classes\User.php';
include_once 'C:\xampp\htdocs\projet_defis\models\join_userAndInfo.php';
include_once 'C:\xampp\htdocs\projet_defis\models\join_userAndAdresse.php';
include_once 'C:\xampp\htdocs\projet_defis\models\requete_admin.php';
include_once 'C:\xampp\htdocs\projet_defis\models\requete_roleUser.php';

//fonction permetttant de récupérer toutes les infos utilisateurs
$allUsers = User::getAllUsers();

//fonction permetttant de récupérer toutes les infos utilisateurs + infos supplémentaires
$joinUsersInfo = getUsersAndInfo();

//fonction permetttant de récupérer toutes les infos utilisateurs + adresse
$joinUsersAdresse = getUsersAndAdresse();

//fonction permetttant de récupérer le nom, prenom et role où le rôle est = administrateur
$getAdmin = getAdmin();


//fonction permetttant de récupérer le nom, prenom et role où le rôle est = utilisateur
$getRoleUser = getRoleUser();


?>


