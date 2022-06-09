<?php

//On initialise la session
session_start();

//On désactive la session
session_unset();

//On détruit la session 
session_destroy();

// On est redirigé automatiquement vers la page de connexion
header("Location: /projet_defis/views/home_view.html");
?>