<?php
session_start();
include_once 'C:\xampp\htdocs\projet_defis\controllers\home_controller.php';
include_once 'C:\xampp\htdocs\projet_defis\models\access_admin.php';
verifAcces();
?>


<html>
<head>
	<meta charset="utf-8"><!-- importer le fichier de style -->
    <link href="/projet_defis/CSS/table.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Connexion</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-md">
		<div class="container">
			<div class="collapse navbar-collapse" id="monMenuDeroulant">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/projet_defis/views/accueil.php">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="/projet_defis/views/interface-bdd.php">Interface BDD</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/projet_defis/views/alesi.html">Le projet Alesi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/projet_defis/views/sauvegarde56.html">Le projet Sauvegarde 56</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/projet_defis/views/python.html">Le projet Python</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/projet_defis/views/mon_site.html">A propos de ce site</a>
					</li>
					<li class="nav-item" id="compte">
						<a class="nav-link" href="/projet_defis/views/mon-compte.html">Mon compte</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<p id="titre">Bienvenue dans l'interface de lecture de données</p>

<br><br><br>

<p><u>Table User</u></p>
<table>
	<tr style = "background : rgb(143, 140, 140);">
		<td style="border: 1px solid black;"><strong>Id_user</strong></td>
		<td style="border: 1px solid black;"><strong>Username</strong></td>
		<td style="border: 1px solid black;"><strong>Password</strong></td>
		<td style="border: 1px solid black;"><strong>Nom</strong></td>
		<td style="border: 1px solid black;"><strong>Prenom</strong></td>
		<td style="border: 1px solid black;"><strong>Telephone</strong></td>
		<td style="border: 1px solid black;"><strong>Email</strong></td>
</tr>

<?php 

 foreach ($allUsers as $index => $user){ ?>
  

<tr>
<td style="border: 1px solid black;"><?= $user['id_user']?></td>
<td style="border: 1px solid black;"><?= $user['username']?></td>
<td style="border: 1px solid black;"><?= $user['password']?></td>
<td style="border: 1px solid black;"><?= $user['nom']?></td>
<td style="border: 1px solid black;"><?= $user['prenom']?></td>
<td style="border: 1px solid black;"><?= $user['telephone']?></td>
<td style="border: 1px solid black;"><?= $user['email']?></td>
</tr>
 
 <?php } ?>    
</table>	
<br><br><br>










<p><u>Table User + Infos supplémentaires</u></p>
<table>
	<tr style = "background : rgb(143, 140, 140);">
		<td style="border: 1px solid black;"><strong>Id_user</strong></td>
		<td style="border: 1px solid black;"><strong>Username</strong></td>
		<td style="border: 1px solid black;"><strong>Password</strong></td>
		<td style="border: 1px solid black;"><strong>Nom</strong></td>
		<td style="border: 1px solid black;"><strong>Prenom</strong></td>
		<td style="border: 1px solid black;"><strong>Telephone</strong></td>
		<td style="border: 1px solid black;"><strong>Email</strong></td>
		<td style="border: 1px solid black;"><strong>Sexe</strong></td>
		<td style="border: 1px solid black;"><strong>Age</strong></td>
		<td style="border: 1px solid black;"><strong>Taille</strong></td>
		<td style="border: 1px solid black;"><strong>Poids</strong></td>
		<td style="border: 1px solid black;"><strong>Lieu de naissance</strong></td>
		<td style="border: 1px solid black;"><strong>Nationalité</strong></td>
</tr>

<?php 

   

 
 
 foreach ($joinUsersInfo as $index => $user){ ?>
  

<tr>
<td style="border: 1px solid black;"><?= $user['id_user']?></td>
<td style="border: 1px solid black;"><?= $user['username']?></td>
<td style="border: 1px solid black;"><?= $user['password']?></td>
<td style="border: 1px solid black;"><?= $user['nom']?></td>
<td style="border: 1px solid black;"><?= $user['prenom']?></td>
<td style="border: 1px solid black;"><?= $user['telephone']?></td>
<td style="border: 1px solid black;"><?= $user['email']?></td>
<td style="border: 1px solid black;"><?= $user['sexe']?></td>
<td style="border: 1px solid black;"><?= $user['age']?></td>
<td style="border: 1px solid black;"><?= $user['taille']?></td>
<td style="border: 1px solid black;"><?= $user['poids']?></td>
<td style="border: 1px solid black;"><?= $user['lieu_naissance']?></td>
<td style="border: 1px solid black;"><?= $user['nationalite']?></td>

</tr>
 
 <?php } ?>    
</table>	
<br><br><br>

<p><u>Table User + Adresse</u></p>
<table>
	<tr style = "background : rgb(143, 140, 140);">
		<td style="border: 1px solid black;"><strong>Id_user</strong></td>
		<td style="border: 1px solid black;"><strong>Username</strong></td>
		<td style="border: 1px solid black;"><strong>Password</strong></td>
		<td style="border: 1px solid black;"><strong>Nom</strong></td>
		<td style="border: 1px solid black;"><strong>Prenom</strong></td>
		<td style="border: 1px solid black;"><strong>Telephone</strong></td>
		<td style="border: 1px solid black;"><strong>Email</strong></td>
		<td style="border: 1px solid black;"><strong>Rue</strong></td>
		<td style="border: 1px solid black;"><strong>Code Postal</strong></td>
		<td style="border: 1px solid black;"><strong>Ville</strong></td>
		<td style="border: 1px solid black;"><strong>Pays</strong></td>
</tr>

<?php 

   
 
 
 
 foreach ($joinUsersAdresse as $index => $user){ ?>
  

<tr>
<td style="border: 1px solid black;"><?= $user['id_user']?></td>
<td style="border: 1px solid black;"><?= $user['username']?></td>
<td style="border: 1px solid black;"><?= $user['password']?></td>
<td style="border: 1px solid black;"><?= $user['nom']?></td>
<td style="border: 1px solid black;"><?= $user['prenom']?></td>
<td style="border: 1px solid black;"><?= $user['telephone']?></td>
<td style="border: 1px solid black;"><?= $user['email']?></td>
<td style="border: 1px solid black;"><?= $user['rue']?></td>
<td style="border: 1px solid black;"><?= $user['code_postal']?></td>
<td style="border: 1px solid black;"><?= $user['ville']?></td>
<td style="border: 1px solid black;"><?= $user['pays']?></td>


</tr>
 
 <?php } ?>    
</table>	
<br><br><br>
<p><u>Table Rôle Administrateur</u></p>
<table>
	<tr style = "background : rgb(143, 140, 140);">
		<td style="border: 1px solid black;"><strong>Nom</strong></td>
		<td style="border: 1px solid black;"><strong>Prenom</strong></td>
		<td style="border: 1px solid black;"><strong>Rôle</strong></td>
</tr>

<?php 

 foreach ($getAdmin as $index => $admin){ ?>
  

<tr>
<td style="border: 1px solid black;"><?= $admin['nom']?></td>
<td style="border: 1px solid black;"><?= $admin['prenom']?></td>
<td style="border: 1px solid black;"><?= $admin['role']?></td>



</tr>
 
 <?php } ?>    
</table>	

<br><br><br>
<p><u>Table Rôle Utilisateur (pas d'accès à cette page)</u></p>
<table>
	<tr style = "background : rgb(143, 140, 140);">
		<td style="border: 1px solid black;"><strong>Nom</strong></td>
		<td style="border: 1px solid black;"><strong>Prenom</strong></td>
		<td style="border: 1px solid black;"><strong>Rôle</strong></td>
</tr>

<?php 

   
 
 
 
 foreach ($getRoleUser as $index => $user){ ?>
  

<tr>
<td style="border: 1px solid black;"><?= $user['nom']?></td>
<td style="border: 1px solid black;"><?= $user['prenom']?></td>
<td style="border: 1px solid black;"><?= $user['role']?></td>



</tr>
 
 <?php } ?>    
</table>
<br><br><br>


</body>
</html>
