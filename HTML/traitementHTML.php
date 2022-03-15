<!doctype html>
<html lang="en">
	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
	    <link rel="stylesheet" type="text/css" href="../CSS/traitement.css">
	    <title>Under the Dome</title>
	 </head>
	 
	 <body>
	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


	    <div class="reseau">	
			<a class="ytb" href="https://www.youtube.com/channel/UC7sYaVuUqiM9e4fn13h22LQ">YouTube</a>
			<a class="twitter" href="https://twitter.com/underthedome?lang=fr">Twitter</a>
		</div>

		<div class="retour">
			<a href="#titre" title="retour haut de page"><img class="before" src="../vrac/retour.png"><img class="hover" src="../vrac/retour1.png"></a>
		</div>

		<div class="document">

			<header>
				<h1 id="titre">Documentation sur la série "Under the Dôme"</h1>				
				
				<nav>
					<a href="TP1 accueil.html">Accueil</a>
					<a href="TP1 article histoire.html">Synopsis</a>
					<div class="dropdown">Médias
						<div class="dropdown-content">
							<a href="Photo.html">Photos</a>
							<a href="Video.html">Vidéos</a>
						</div>
					</div>
					<a href="TP1 article personnages.html">Personnages</a>
					<a class="ici" href="contact.html">Contact</a>
				</nav>

				<hr>
				<img class="presentation" src="../vrac/Présentation.png" alt="Image de présentation" title="Image de couverture de la série"/>

			</header>

		   	<div class="container" id="presentation">

		   		<?php
				if(empty($_GET['nom'])) {
					echo "<div class=\"center\">Réessayer en rentrant votre nom</div><br>";
				}
				else{
					echo "<div class=\"center\"> Nom : $_GET[nom] </div><br>";
				}
				if(empty($_GET['email'])) {
					echo "<div class=\"center\"> Réessayer en rentrant une adresse e-mail </div><br>";
				}
				else{
					$email = $_GET['email'];
					$email = filter_var($email, FILTER_SANITIZE_EMAIL);
					if (!filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
					  echo "<div class=\"center\"> Email : $email </div><br>";
					}
					else {
					  echo "<div class=\"center\">$email is not a valid email address</div><br>";
					}

				}
				if(empty($_GET['tel'])){
					echo "<div class=\"center\">Le numéro de téléphone n'est pas valide </div><br>";
				}
				else{
					$meta_carac = array("-", ".", " ");
					$_GET['tel']= str_replace($meta_carac, " ", $_GET['tel']);
					$_GET['tel'] = chunk_split($_GET['tel'], 3 , "\r");
					echo "<div class=\"center\">Téléphone : $_GET[tel] </div><br>";
				}
				echo "<div class=\"center\">Type de remarque : $_GET[select]</div><br>";
				if (empty($_GET['visite'])){
					echo "<div class=\"center\">Veuillez renseigner si c'est votre première visite ou non</div><br>";
				}
				else{
					echo "<div class=\"center\">Première visite : $_GET[visite] </div><br>";
				}
				if (empty($_GET['description'])){
					echo "<div class=\"center\">Veuillez entrer une description</div><br>";
				}
				else{
					echo "<div class=\"center\">Description : $_GET[description]</div><br>";
				}
				/*trim -> supprime les espaces*/
				?>

		    </div>

		    <div class="nav">
		   		<a href="contact.html">Retour vers le site</a>
		   	</div>

		   	<footer>
		   		<hr><br>
				<p>NOM : GRANET</p>
				<p>Prénom : Maxime</p>
				<p>Groupe : 4</p>
		   	</footer>
		</div>
  	</body>
</html>

