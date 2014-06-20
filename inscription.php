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
		<title>connexion</title>
	</head>

	<body>
        <header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center">Connexion</h1>
					</div>
				</div>
			</div>
        </header>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <?php
						try
						{
							// Create connection
							$con = new PDO("mysql:host=localhost;dbname=projetjudo", 'root', ''); // connexion à la BDD
						}
						catch(Exception $e)
						{
							// En cas d'erreur, on affiche un message et on arrête tout
								die('Erreur : '.$e->getMessage());
						}


							if (isset($_POST['ajout']))
							{
									$nom = $_POST['nom'];
									$prenom= $_POST['prenom'];
									$mail = $_POST['email'];
									$id = $_POST['id'];
									$mdp = $_POST['mdp'];
										
									$sql="INSERT INTO `membres` VALUES ('', '$id', '$mdp','$nom', '$prenom', '', '$mail')";
									
									echo"vous êtes bien inscrit </br>";
									$con->exec($sql);
									$con=null;
							}

					?>
					<form class="form-horizontal" role="form" action="index.php?page=inscription.php" method="post">
                        <!-- Formulaire d'insciption -->
						<div class="form-group">
							<label class="col-md-4" > NOM : </label>
							<div class="col-md-8" >
								<div class="col-md-8">
									<div style="display">
										<input type="text" name="nom" id="nom" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4" > PRENOM : </label>
							<div class="col-md-8" >
								<div class="col-md-8">
									<div style="display">
										<input type="text" name="prenom" id="prenom" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4" > EMAIL : </label>
							<div class="col-md-8" >
								<div class="col-md-8">
									<div style="display">
										<input type="text" name="email" id="email" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4" > IDENTIFIANT : </label>
							<div class="col-md-8" >
								<div class="col-md-8">
									<div style="display">
										<input type="text" name="id" id="id" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4" > MOT DE PASSE : </label>
							<div class="col-md-8" >
								<div class="col-md-8">
									<div style="display">
										<input type="password" name="mdp" id="mdp" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
							  <button type="submit" name="ajout" class="btn btn-default" onsubmit>ajouter le nouveau membre</button>
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