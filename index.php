<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Accueil</title>
    <link href="donnees/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="donnees/css/style_bd.css" />
	
</head>
<body>
	<?php 
		include_once('donnees/include/db.php'); 
		//require_once('donnees/include/entete.php');	  
	?>

    <div class="container">
        <!-- SEE STEP 5 -->
		
		<!--entete de la page -->
				<header>				
						<div class="navbar-wrapper">
							 	<nav class="navbar navbar-inverse">
									<div class="navbar-brand"  >Unicom BD @ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
									<ul class="nav navbar-nav">
										<li class="active"> <a href="index.php">Accueil</a> </li>
										<li> <a href="donnees/include/payement_valide.php">Payement Validé</a> </li>
										<li> <a href="donnees/include/payement_non_valide.php">Payement Non Validé</a> </li>
										<li> <a href="#">Statistiques</a> </li>
 									</ul>
 							</nav>
							</div>
 				</header>
				 <h5 class="card-title"><i class="fa fa-fw fa-search"></i> <marquee>Informations Generales </marquee> </h5>
				
		
		<?php  
			require_once('donnees/include/formulaire_recherche.php');	  
		?>
	
	<!-- table generale-->	
	 
			<table class="table table-striped table-bordered">
					<thead>
						<tr class="bg-primary text-white">
							<th> </th>
							<th>Tel</th>
							<th>Operateur</th>
							<th>Montant</th>
							<th>Transaction Status</th>
							<th>Date Heure</th>
							 
						</tr>
					</thead>
					<tbody>
						<?php 
							include_once('donnees/include/info_general.php');
						?>
						
					</tbody>
		</table>
		<!-- fin Table -->	
		
    </div>
	
	<?php 
		 require_once('donnees/include/footer.php');	  
	?>
	
</body>
</html