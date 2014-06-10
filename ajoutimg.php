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
                        <h1 class="text-center">Ajout d'une image</h1>
                    </div>
                </div>
            </div>
        </header>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Formulaire d'ajout d'une image -->
						<form class="form-horizontal" role="form" action="ajout.php" method="post">
							<div class="col-md-6 col-md-offset-3">
								entrer le lien de l'image:
								<input type="text" name="ajoutimg" id="ajoutimg" class="form-control" required>
							</div>
							<div class="col-md-12">
								<button type="submit" name="enregistrer" class="btn btn-default" onsubmit">Enregistrer</button>
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