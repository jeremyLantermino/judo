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
							<h3> les catégories d'ages</h3>
							<div class="prem">
								<table  class="table table-striped">
									<tr class="info">
										<td><strong>ANNEE DE NAISSANCE</strong></td>
										<td><strong>NIVEAU</strong></td>
									</tr>
									<tr class="active">
										<td>2008-2009</td>
										<td>Baby</td>
									</tr>
									<tr class="info">
										<td>2006-2007</td>
										<td>Mini-poussins</td>
									</tr>
									<tr class="active">
										<td>2004-2005</td>
										<td>Poussins</td>
									</tr>
									<tr class="info">
										<td>2002-2003</td>
										<td>Benjamins</td>
									</tr>
									<tr class="active">
										<td>2000-2001</td>
										<td>Minimes</td>
									</tr>
									<tr class="info">
										<td>1997-1998-1999</td>
										<td>Cadet</td>
									</tr>
									<tr class="active">
										<td>1994-1995-1996</td>
										<td>Junior</td>
									</tr>
									<tr class="info">
										<td>1977-1993</td>
										<td>Séniors</td>
									</tr>
									<tr class="active">
										<td>A partir de 1976</td>
										<td>Vétérans</td>
									</tr>
								</table>
							</div>
						</div>	
                    </div>
                </div>
            </div>
        </section>
		
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
		
    </body>
</html>