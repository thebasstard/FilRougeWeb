<!DOCTYPE html>
<html lang="fr">	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="http://127.0.0.1/VillageGreenWeb/bootstrap/css/bootstrap.css" rel="stylesheet">
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->
		<link href="http://127.0.0.1/VillageGreenWeb/css/vgsupprime.css" rel="stylesheet">		
		<!-- <link href="css/vgsupprime.css" rel="stylesheet"> -->
		<title>Village Green magasin de musique en ligne</title>
	</head>
	<body>
		<img src="http://127.0.0.1/VillageGreenWeb/images/fond.png" id="photo"/>

		
		<div class="container" id="fond">

			<div id="page">

				
		
		
			<div class="row fondcouleur1">

			<h1><strong><p align = "center">Supprimer la fiche client</strong></h1>

			<form class = "vertical" role="form" method="POST" action="<?=site_url("script_vgsupprime")?>">
				<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
    				<thead>
				        <tr id="tableau">
				            <th>Nom</th>
				            <th>Prénom</th>
				            <th>Adresse de facturation</th>
				            <th>Adresse de livraison</th>
				            <th>Type de client</th>
				        </tr>
    				</thead>
    				<tbody>				      
				          <tr>
				            <td><?php echo $client->Nom_Client; ?></td>
				            <td><?php echo $client->Prenom_Client; ?></td>
				            <td><?php echo $client->Adr_Factur; ?></td>
				            <td><?php echo $client->Adr_Livr; ?></td>
				            <td><?php echo $client->Categorie; ?></td>
				          </tr>
				      	<!--<?php echo "<td><input type='hidden' name='ID_Client' value='" .$client->ID_Client."'/><td>\n"; ?>  première manière pour sélectionner l'id-->
				      	<input type="hidden" name="id" value="<?php echo $client->id; ?>"/> <!--deuxième manière -->  
				    </tbody>
				</table>
				<div class="form-group col-xs-2 text-center">			
					<input type="submit" id="delete" class="btn btn-danger" value="Supprimer"/>
				</div>
				<div class="form-group col-xs-2 text-center" id="retour">
					<a href="http://localhost/VillageGreenWeb/index.php/vgrecapitulatif"><input type="button" value="Retour au récapitulatif"></input></a>
				</div>
			</form>
		</div>
	</div>
		</div>
	</body>
</html>

<!-- <script src="http://127.0.0.1/VillageGreenWeb/CodeIgniter/jquery.js"></script> -->
<script src="js/jquery.js"></script>
<!-- <script src="http://127.0.0.1/VillageGreenWeb/CodeIgniter/bootstrap/js/bootstrap.min.js"></script> -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="http://127.0.0.1/VillageGreenWeb/CodeIgniter/VillageGreenFormulaire2.js"></script> -->
<!-- <script type="text/javascript" src="VillageGreenFormulaire2.js"></script> -->