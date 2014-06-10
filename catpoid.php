<!DOCTYPE html>
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
		<title>la boutique</title>
	</head>

	<body>
		<a href="connexion.php">se connecter</a>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4"><a href="accueil.php"><img src="image/alspuiseux.jpg" width="250px"/></a>
					</div>
				</div>
			</div>
        </header>
		
        <nav id="topnav" class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="menu">
					<div class="col-md-4"><a href="actu.php">Actualité</a>
					</div>
					<div class="col-md-4"> 
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							a propos du club <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="equipe.php">l'équipe</a></li>
							<li><a href="result.php">résultats</a></li>
							<li><a href="event.php">évènements</a></li>
							<li><a href="entrain.php">entrainements</a></li>
							<li><a href="photovid.php">photos/vidéos</a></li>
							<li><a href="boutique.php">la boutique</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							infos pratiques <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="tech.php">techniques de judo</a></li>
							<li><a href="catage.php">catégories d'age</a></li>
							<li><a href="catpoid.php">catégories de poids</a></li>
							<li><a href="codemoral.php">code moral du judo</a></li>
							<li><a href="ceinture.php">grade</a></li>
						</ul>
					</div>
                </div>
            </div>
        </nav>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
						<div class="col-md-6 col-md-offset-3">
							
								<h3>AFFICHER LES CATEGORIES DE JUDOKA PAR POIDS</h3>
								<table  class="table table-striped">
									<tr class="info">
										<td><strong>CATEGORIES</strong></td>
										<td><strong>HOMME</strong></td>
										<td><strong>FEMME</strong></td>
									</tr>
									<tr class="active">
										<td>Elite</td>
										<td>-60kg,-66kg,-73kg,-81kg,-90kg,-100kg,+100kg</td>
										<td>-48kg,-52kg,-57kg,-63kg,-70kg,-78kg,+78kg</td>
									</tr>
									<tr class="info">
										<td>Mini-poussins</td>
										<td>17H-18H</td>
										<td>Mardi et Vendredi</td>
									</tr>
									<tr class="active">
										<td>Poussins</td>
										<td>18H-19H</td>
										<td>Mardi et Vendredi</td>
									</tr>
									<tr class="info">
										<td>Benjamins et certains Minimes</td>
										<td>19H-20H</td>
										<td>Mardi et Vendredi</td>
									</tr>
									<tr class="active">
										<td>Certains Minimes, Cadets, Juniors, Séniors et Vétérans</td>
										<td>20H-21H15</td>
										<td>Mardi et Vendredi</td>
									</tr>
								</table>
							
                    </div>
                </div>
            </div>
        </section>
		
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
		
    </body>
</html>