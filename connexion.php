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
                        <!-- Formulaire d'ajout d'une actualité -->
						<form class="form-horizontal" role="form" action="ajout.php" method="post">
							<div class="clearfix"></div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-md-4">identifiant : </label>
									<input type="text" name="identifiant" id="identifiant" class="form-control" required>
								</div>
								<div class="form-group">
									<label class="col-md-4">mot de passe : </label>
									<input type="text" name="mdp" id="mdp" class="form-control" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-12">
										<button type="submit" name="comfirmer" class="btn btn-default" onsubmit"><a href="ajoutactu.php">comfirmer</a></button>
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