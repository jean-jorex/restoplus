<?php 

session_start();
if (!$_SESSION['Email'] AND !$_SESSION['Mot_de_passe']) {
  header("Location: connexion.php");

}
    //$db = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
	require_once('connexion_bd.php');
    $sql = "SELECT *  FROM admin WHERE Email = '{$_SESSION[ "Email" ]}' AND Mot_de_passe = '{$_SESSION[ "Mot_de_passe" ]}'";
    $stmt = $db->query($sql);
    if($stmt == false){
        die("Erreur"); 
    }
    
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION['Id']=$row['Id'];
$_SESSION['Nom_prenom']=$row['Nom_prenom'];
$_SESSION['Contact'] = $row['Contact'];
$_SESSION['Email']=$row['Email'];

 ?>

<?php require('Layouts/Header.php'); ?><br><br><br><br>

<!-- <div class="welcome-hero-serch-box" style="">

	<div class="welcome-hero-serch">
		<button class="welcome-hero-btn"  onclick="window.location.href='Elite/VueCommande.php'">
							 Voir les commande  <i data-feather="search"></i> 
		</button>
	</div>
	<div class="welcome-hero-serch">
		<button class="welcome-hero-btn btn " id="lien" onclick="window.location.href='Elite/VueReservation.php'">
							 voir les reservation  <i data-feather="search"></i> 
		</button>
	</div>	
	<div class="welcome-hero-serch">
		<button class="welcome-hero-btn btn " onclick="window.location.href='Elite/EnregistrementPlat.php'">
							 Enregistrer un plats  <i data-feather="search"></i> 
		</button>
	</div>	
	<div class="welcome-hero-serch">
		<button class="welcome-hero-btn btn " onclick="window.location.href='Elite/EnregistrementLiv.php'">
			Enregistrer un Livreur  <i data-feather="search"></i> 
		</button><br><br>
	</div>
	<div class="welcome-hero-serch">
		<button class="welcome-hero-btn btn " onclick="window.location.href='Elite/VuePlat.php'">
			Liste des Plats  <i data-feather="search"></i> 
		</button><br><br>
	</div>
	<div class="welcome-hero-serch">
		<button class="welcome-hero-btn btn " onclick="window.location.href='Elite/VueLiv.php'">
			Liste des Livreurs  <i data-feather="search"></i> 
		</button><br><br>
	</div>
</div><br><br> -->
        
		<section id="list-topics" class="list-topics" style="margin-top: 100px;">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-"></i>
								</div>
								<h2><a href="Elite/VueCommande.php">Voir Commande</a></h2>
								<p style="color: green;">6 plats</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-"></i>
								</div>
								<h2><a href="Elite/listeLivraison.php">Liste Livraison</a></h2>
								<p style="color: green;">6 plats</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-"></i>
								</div>
								<h2><a href="Elite/VueReservation.php">Liste reservation</a></h2>
								<p style="color: green;">9 plats</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-"></i>
								</div>
								<h2><a href="Elite/listeLivraison.php">Liste Livreur</a></h2>
								<p style="color: green;">10 plats</p>
							</div>
						</li>

						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-"></i>
								</div>
								<h2 ><a href="Elite/VuePlat.php">Liste des Plats</a></h2>
								<p style="color: green;">20 plats</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-"></i>
								</div>
								<h2 ><a href="Elite/EnregistrementPlat.php">Ajouter Plats</a></h2>
								<p style="color: green;">20 plats</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-"></i>
								</div>
								<h2 ><a href="Elite/EnregistrementLiv.php">Ajouter Livreur</a></h2>
								<p style="color: green;">20 plats</p>
							</div>
						</li>
					</ul>
				</div>
			</div><!--/.container-->

		</section>



<?php require('Layouts/Footer.php'); ?>