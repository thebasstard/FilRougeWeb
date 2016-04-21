<!DOCTYPE html>
<html lang="fr">
	<meta charset="utf-8">
	<head>
		<link href="http://127.0.0.1/VillageGreenWeb/CodeIgniter/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="http://127.0.0.1/VillageGreenWeb/CodeIgniter/villagegreen2.css" rel="stylesheet">
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="villagegreen2.css" rel="stylesheet"> -->
		<title>Village Green magasin de musique en ligne</title>
	</head>
	<body>

	<img src="images/fond.png" id="photo"/>

	<div class="container">
		
		<div id="page">

			<div class="row">
				<div class="navbar navbar-default" id="navbar1">
					<div class="container-fluid">
						<div class="navbar-header">
						    <ul class="nav navbar-nav">
							    <li class="col-xs-2 col-md-2">
							      	<img src="images/logo.png" id="logo"/>
							    </li>
							    <li class="col-xs-3 col-md-3">
									<h1 class="panel-title" align="center" id="titre"><strong>VILLAGE GREEN</strong></h1>										
								</li>										
								<li class="col-xs-5 col-md-5">
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

			<div id="contenu" class="row fondcouleur1">								
							
				<div class="row ">
					<div class="col-md-12">
						
							
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<!--les indicateurs-->
							  <ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  </ol>
							  <!--les images qui défilent-->
							  <div class="carousel-inner" role="listbox">
							    <div class="carousel-item active">
							      <img src="images/SlideArrivages.png" alt="First slide" />
							    </div>
							    <!-- <div class="carousel-item">
							      <img data-src="images/SlideNew.png" alt="Second slide">
							    </div>
							    <div class="carousel-item">
							      <img data-src="images/SlidePromo.png" alt="Third slide">
							    </div> -->
							  </div>
							  <!--pour controler les fleches gauche et droite-->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" id="flechegauche">
							    <span class="icon-prev" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" id="flechedroite">
							    <span class="icon-next" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
						
					</div>
				</div>

				<br />

				<div>
					<h3 align="center"><strong>Meilleures ventes</strong></h3>
				</div>

				<br />				

				<div class="row">
					  <div class="col-xs-4 col-md-4">
					    <a href="#" class="thumbnail">
					      <img src="images/top1.png" alt="photo1">
					    </a>
					  </div>
						<div class="col-xs-4 col-md-4">
				    	<a href="#" class="thumbnail">
				     	 <img src="images/top2.png" alt="photo2">
				   	 	</a>
				  	</div>
				  	<div class="col-xs-4 col-md-4">
				    	<a href="#" class="thumbnail">
				     	 <img src="images/top3.png" alt="photo3">
				   	 	</a>
				  	</div>
				</div>
	
				<div class="row">					
					<div class="col-xs-6 col-md-6">	
						<h3 align="center"><strong>Partenaires</strong></h3>	
						<br />							
						<img src="images/Partenaires.png"/>
					</div>
					<div class="col-xs-6 col-md-6">
						<h3 align="center"><strong>Info livraisons</strong></h3>
						<br/>
						<img src="images/InfoLivraisons.png"/>
					</div>
				</div>

			</div>
		
			<div class="row">
				<div class="navbar navbar-default" id="navbar2">
    				<div class="container-fluid">
						<div class="navbar-footer">
							
								<div class="col-xs-2 col-md-2" id="Paiements">
									<img src="images/Paiements.png"/>
								</div>
								<div class="col-xs-1 col-md-1" id="cgv">
									<strong>C.G.V</strong>
								</div>
								<div class="col-xs-1 col-md-1" id="contact">
									<strong>Contact</strong>
								</div>
								<div class="col-xs-4 col-md-4" id="adresse">
									<strong>5 BD du Soleil</strong>
									<strong>80000 Amiens</strong>
								</div>
								<div class="col-xs-2 col-md-2" id="ReseauxSociaux">
									<img src="images/LogoTwitter.png" id="Twitter"/>																												
									<img src="images/LogoFb.png" id="Facebook"/>
								</div>
							
						</div>	
					</div>
				</div>
			</div>	


		</div>
	</div>
	</body>
</html>