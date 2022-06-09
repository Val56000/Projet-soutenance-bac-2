<?php

/**
*
* @return array
*/
function getRoleUser(){
    $bdd = new PDO('mysql:host=localhost;dbname=alesi_test;charset=utf8', 'root', '');
   
   $reqUsers = $bdd->prepare('SELECT nom, prenom, role FROM user, roles WHERE user.id_user = roles.id_role AND roles.role = "utilisateur"');
   $reqUsers->execute([]);
   return $reqUsers->fetchAll();


   }

   ?>