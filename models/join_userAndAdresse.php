<?php

/**
*
* @return array
*/
function getUsersAndAdresse(){
    $bdd = new PDO('mysql:host=localhost;dbname=alesi_test;charset=utf8', 'root', '');
   
   $reqUsers = $bdd->prepare('SELECT * FROM user, adresse WHERE user.id_user = adresse.id_adresse');
   $reqUsers->execute([]);
   return $reqUsers->fetchAll();


   }

   ?>