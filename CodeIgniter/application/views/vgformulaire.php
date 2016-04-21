<!DOCTYPE html>
<html lang="fr">	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="http://127.0.0.1/VillageGreenWeb/CodeIgniter/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="http://127.0.0.1/VillageGreenWeb/CodeIgniter/villagegreen.css" rel="stylesheet">		
		<link href="villagegreen2.css" rel="stylesheet">
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

			<div id="menu" class="navbar navbar-static">
			  <div class="navbar-inner">			    
			    <ul class="nav" role="navigation">
			        <li class="dropdown col-xs-1 col-md-1"> <a id="drop" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Gui/Bass</strong><b class="caret"></b></a>
				        <ul
				          class="dropdown-menu" role="menu" aria-labelledby="drop">
				            <li>
				            	<a tabindex="-1" href="http://google.com">Guitares</a>
				            </li>
				            <li>
				            	<a tabindex="-1" href="#anotherAction">Basses</a>
				            </li>
				            <li>
				            	<a tabindex="-1" href="#">Amplification</a>
				            </li>
				            <li class="divider"></li>
				            <li>
				            	<a tabindex="-1" href="#">Cordes</a>
				            </li>
				      	</ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Batteries</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#">Batteries acoustiques</a>
			          </li>
			          <li><a tabindex="-1" href="#">Batteries électroniques</a>
			          </li>
			          <li><a tabindex="-1" href="#">Cymbales</a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#">Baguettes</a>
			          </li>
			        </ul>
			      </li>			      
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Claviers</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Studio</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#">Enceintes de monitoring</a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#">Logiciels</a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Sono</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Dj</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Micros</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Effets</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Vents</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Instr.Trad</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Accessoires</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			    </ul>			    			      			    
			  </div>
			</div> 	

				

				<div class="row fondcouleur1">	
					<form class = "vertical" role="form" method="POST" action="http://localhost/Creation_dun_formulaire_dajout/script_ajout.php">
						<div class="form-group col-xs-2 text-center">
							<h4><strong>Enregistrement</strong></h4>
						</div>
						<div class="form-group col-xs-6">
							<input required type="text" placeholder="Nom *" name = "Nom" id = "Nom" class = "form-control"/>
						</div>
						<div class="form-group col-xs-6">
							<input required type="text" placeholder="Prénom *" name="Prenom" id ="Prenom" class ="form-control"/>
						</div>
						<div class="form-group col-xs-6">
							<input required type="text" placeholder="Email (adresse@email.com) *" name="Email" id = "Email" class ="form-control"/>
						</div>
						<div class="form-group col-xs-6">
							<input required type="text" placeholder="Adresse de facturation *" name="Facturation" id="Facturation" class="form-control">
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
							<h4>* Mentions obligatoires</h4>
						</div>
						<div class="form-group col-xs-2 text-center">
							<input type="submit" id="Envoyer" class="btn" value=""/>
						</div>						
					</form>	

				</div>

			</div>	
				
		</div>
				
	</body>
</html>

<script src="http://127.0.0.1/VillageGreenWeb/CodeIgniter/jquery.js"></script>
<script src="jquery.js"></script>
<script src="http://127.0.0.1/VillageGreenWeb/CodeIgniter/bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/VillageGreenWeb/CodeIgniter/VillageGreenFormulaire2.js"></script>
<script type="text/javascript" src="VillageGreenFormulaire2.js"></script>
