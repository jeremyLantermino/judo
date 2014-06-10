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
		<title>ajout résultat</title>
	</head>

	<body data-spy="scroll" data-target=".navbar">
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
                        <div class="col-md-3"><a href="ajoutactu.php">ajouter une actualité</a></div>
						<div class="col-md-3"><a href="ajoutevent.php">ajouter un évènement</a></div>
						<div class="col-md-3"><a href="ajoutresult.php">ajouter un résultat</a></div>
						<div class="col-md-3"><a href="ajoutimg.php">ajout d'une photo</a></div>
                </div>
            </div>
        </nav>
   
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Ajout d'un résultat</h1>
                    </div>
                </div>
            </div>
        </header>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Formulaire d'ajout d'une actualité -->
						<form class="form-horizontal" role="form" action="ajout.php" method="post">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-4" > Nom/Prénom de l'ajouteur : </label> <!-- Pour mettre "Rapporteur" (a l'aide d'un label) a coter de la liste deroulante on fractionne l'ecran en 4-8 (4 pour "rapporteur" et 8 pour la liste deroulante -->
									<div class="col-md-8" >
										<select class="form-control" name="rapporteur">  <!-- GRID option (pour fractionner l'ecran et y inserer des données ) -->
											<option value="0">Véronique ROYER</option>
											<option value="1">Jean-Philippe ROQUES</option>
											<option value="2">Cyrille SALBART</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-4" > Date de publication : </label>
									<div class="col-md-8" >
										<div class="col-md-8">
											<div id="date_cache" style="display">
												<input type="text" name="date" id="date" class="form-control" placeholder="JJ/MM/AAAA" required>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-md-4">Description du résultat : </label>
									<textarea class="form-control col-md-3" rows="5" name="description" required></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-12">
									  <button type="submit" name="enregistrer" class="btn btn-default" onsubmit">Enregistrer</button>
									</div>
								</div>
							</div>
						</form>
					</div>
                </div>
            </div>
        </section>
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
		
    </body>
</html>