<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
 
?>
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
								$bdd = new PDO("mysql:host=localhost;dbname=projetjudo", 'root', ''); // connexion à la BDD
							}
							catch(Exception $e)
							{
								// En cas d'erreur, on affiche un message et on arrête tout
									die('Erreur : '.$e->getMessage());
							}
							
							if(isset($_POST) && isset($_POST['identifiant']) AND isset ($_POST['mdp']))
							{
								$y = $bdd->prepare('SELECT COUNT(*) FROM membres WHERE identifiant="'.$_POST['identifiant'].'"');
								$y->execute(array($_POST['identifiant']));
								$x = $y->fetch();
								if ($x[0] == 0)
								{
									echo "cet identifiant n'existe pas";
								}
								else
								{
									$e = $bdd->prepare('SELECT mdp FROM membres WHERE identifiant=?');
									$e->execute(array($_POST['identifiant']));
									$rep = $e->fetch();
									$mdp = ($_POST['mdp']);
									
									if($mdp == $rep['mdp'])
									{
										$_SESSION['identifiant'] = $_POST['identifiant'];
										$_SESSION['mdp'] = $_POST['mdp'];
										header('location: index1.php?page=ajoutactu.php');
									}
									else
									{
										echo"mot de passe incorrect";
									}
								}
							}
							
						?>
					</div>
				 </div>
			</div>
		</section>
	</body>
</html>