 <?php
 session_start();
 ?><!DOCTYPE html>
<html>
	<head>
		<link href="bootstrap-3.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<meta charset="utf-8">
		<script src="bootstrap/js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<a href="connexion.php">se connecter</a>
		<a href="index.php?page=inscription.php">inscription</a>
		<?php
			if (isset($_SESSION['identifiant']))
			{
				echo"<a href='deconnection.php'>Déconnexion</a>";
			}
		?>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4"><a href="index.php?page=accueil.php"><img src="image/alspuiseux.jpg" width="250px"/></a>
					</div>
				</div>
			</div>
        </header>
        <nav id="topnav" class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="menu">
					<div class="col-md-4"><a href="index.php?page=actu.php">Actualité</a>
					</div>
					<div class="col-md-4"> 
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							a propos du club <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="index.php?page=equipe.php">l'équipe</a></li>
							<li><a href="index.php?page=result.php">résultats</a></li>
							<li><a href="index.php?page=event.php">évènements</a></li>
							<li><a href="index.php?page=entrain.php">entrainements</a></li>
							<li><a href="index.php?page=photovid.php">photos/vidéos</a></li>
							<li><a href="index.php?page=boutique.php">la boutique</a></li>
							<li><a href="index.php?page=contact.php">contactez nous</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							infos pratiques <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="index.php?page=tech.php">techniques de judo</a></li>
							<li><a href="index.php?page=catage.php">catégories d'age</a></li>
							<li><a href="index.php?page=catpoid.php">catégories de poids</a></li>
							<li><a href="index.php?page=codemoral.php">code moral du judo</a></li>
							<li><a href="index.php?page=grade.php">grade</a></li>
						</ul>
					</div>
                </div>
            </div>
        </nav>