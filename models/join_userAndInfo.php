<?php

/**
*
* @return array
*/
function getUsersAndInfo(){
    $bdd = new PDO('mysql:host=localhost;dbname=alesi_test;charset=utf8', 'root', '');
   
   $reqUsers = $bdd->prepare('SELECT * FROM user, info_user WHERE user.id_user = info_user.id_info_user');
   $reqUsers->execute([]);
   return $reqUsers->fetchAll();


   }

   ?>