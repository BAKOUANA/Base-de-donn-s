<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Payements Non Validés</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_bd.css" />
	 
</head>
<body>
	<?php 
		require_once('db.php'); 
		//require_once('entete.php');	  
	?>

    <div class="container">
        <!-- SEE STEP 5 -->
	 
		<!--entete de la page -->
				<header>				
						<div class="navbar-wrapper">
					 			<nav class="navbar navbar-inverse">
									<div class="navbar-brand"  >Unicom BD @ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
									<ul class="nav navbar-nav">
										<li> <a href="../../index.php">Accueil</a> </li>
										<li> <a href="payement_valide.php">Payement Validé</a> </li>
										<li class="active"> <a href="#">Payement Non Validé</a> </li>
										<li> <a href="#">Statistiques</a> </li>
 									</ul>
 							</nav>
							</div>
						
				</header>
				
		<h5 class="card-title"><i class="fa fa-fw fa-search"></i> <marquee>Payements Non Validés </marquee> </h5>
		
		
		<?php  
			require_once('formulaire_recherche.php');	  
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
							include_once('info_payement_non_valide.php');
						?>
						
					</tbody>
		</table>
		<!-- fin Table -->	
		
    </div>
	
	<?php 
		 require_once('footer.php');	  
	?>
	
</body>
</html