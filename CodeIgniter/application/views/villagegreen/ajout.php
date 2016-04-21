<!DOCTYPE html>
<html lang="fr">
	<meta charset="utf-8">
	<head>
		<link href="http://127.0.0.1/VillageGreenWeb/CodeIgniter/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="http://127.0.0.1/VillageGreenWeb/CodeIgniter/VillageGreenFormulaire2.css" rel="stylesheet">
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="VillageGreenFormulaire2.css" rel="stylesheet"> -->
		<title>Village Green magasin de musique en ligne</title>
	</head>
	<body>
	<img src="images/fond.png" id="photo"/>
	<div class="container" id="fond">

		
	

		<div id="page">

			<div class="row">
				<div class="navbar navbar-default" id="navbar1">
					<div class="container-fluid">
						<div class="navbar-header">
						    <ul class="nav navbar-nav">
							    <li class="col-xs-2 col-md-2">
							      	<img src="images/logo.png" id="logo"/>
							    </li>
							    <li class="col-xs-5 col-md-5">
									<h1 class="panel-title" align="center" id="titre"><strong>VILLAGE GREEN</strong></h1>										
								</li>										
								<li class="col-xs-4 col-md-4">
									<input type="text" class="form-control" name="recherche" id="recherche"/>								
								</li>
								<li class="col-xs-1 col-md-1">
									<img src="images/Loupe.png" id="loupe"/>
								</li>	
								<li>
									<p id="EspaceClient"><strong>Espace client</strong></p>
								</li>
																		
							</ul>								
						</div>
					</div>
				</div>
			</div>

				

			<div id="menu" class="main-navigation" role="navigation">					
				<span >
					<strong>Gui/Bass</strong>
				</span>
				<span>
					<strong>Batteries</strong>										
				</span>										
				<span>
					<strong>Clavier</strong>
				</span>
				<span>
					<strong>Studio</strong>
				</span>	
				<span>
					<strong>Sono</strong>
				</span>
				<span >
					<strong>Dj</strong>
				</span>
				<span >
					<strong>Micros</strong>
				</span>	
				<span >
					<strong>Effets</strong>
				</span>	
				<span >
					<strong>Pc/Mac</strong>
				</span>	
				<span >
					<strong>Vents</strong>
				</span>	
				<span >
					<strong>Instr.Trad</strong>
				</span>	
				<span >
					<strong>Parts</strong>
				</span>		
				<span >
					<strong>Cases</strong>
				</span>		
				<span >
					<strong>Accessoires</strong>
				</span>																						
			</div>

			<div id="contenu" class="row fondcouleur1" >	
								
				<h4 align="center"><strong>Enregistrement</strong></h4>
			</div>

			<div class="row fondcouleur1">	
				<form class = "vertical" role="form" method="POST" action="http://localhost/Creation_dun_formulaire_dajout/script_ajout.php">
					<div class="form-group col-xs-6">
						<input type="text" placeholder="Nom" name = "Nom" id = "Nom" class = "form-control"/>
					</div>
					<div class="form-group col-xs-6">
						<input type="text" placeholder="Prénom" name="Prenom" id ="Prenom" class ="form-control"/>
					</div>
					<div class="form-group col-xs-6">
						<input type="text" placeholder="Email" name="Email" id = "Email" class ="form-control"/>
					</div>
					<div class="form-group col-xs-6">
						<input type="text" placeholder="Adresse de facturation" name="Facturation" id="Facturation" class="form-control">
					</div>
					<div class="form-group col-xs-6">
						<input type="text" placeholder="Adresse de livraison" name="Livraison" id="Livraison" class="form-control">
					</div>
					<div class="form-group col-xs-6">
						
						<select class ="form-control" name="Client" id="Client">
							<option value = "Type">Type de client</option>						
							<option value = "Professionnel">Professionnel</option>
							<option value = "Particulier">Particulier</option>
						</select>
					</div>

					<div class="form-group col-xs-2 text-center">
						<input type="submit" id="Envoyer" class="btn" value="Envoyer"/>
					</div>						
				</form>	
			</div>

			</div>	

			
		</div>

	</div> <!-- container test 1 -->	
	</body>
</html>