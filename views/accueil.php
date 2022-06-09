<?php
session_start();

?>




<html>
<head>
	<meta charset="utf-8">
	<link href="/projet_defis/CSS/style-accueil.css" media="screen" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-md">
		<div class="container">
			<div class="collapse navbar-collapse" id="monMenuDeroulant">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" href="/projet_defis/views/accueil.php">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/projet_defis/views/interface-bdd.php">Interface BDD</a>
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


<!--div avec l'id prénom sera utilisée pour donner un style au prénom de l'utilisateur sur l'interface d'accueil-->
<div id="prenom">

<?php
require('C:\xampp\htdocs\projet_defis\_config\connect_bdd.php');

//On prépare la requête
$req = $bdd->prepare('SELECT * FROM user WHERE username = ?');
$req->execute(array($_SESSION['username']));

//fetch analyse les entrées une par une jusqu'à trouver la bonne ligne qui sera stockée dans la variable $donnees
while($donnees = $req->fetch()){

//Code php pour afficher le prénom de l'utilisateur sur la page d'accueil (avec concaténation)
echo "Bonjour ".$donnees['prenom']."";

}
?>
</div>

<p id="titre">Bienvenue dans l'accueil</p>
	<div id="body">
		<div class="box">
			<div class="circle"></div>
			<p></p>
		</div>
	</div>



	
</body>
</html>

