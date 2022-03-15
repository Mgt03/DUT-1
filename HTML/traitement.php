<?php
if(empty($_GET['nom'])) {
	echo "Réessayer en rentrant votre nom\n";
}
if(empty($_GET['email'])) {
	echo "Réessayer en rentrant une adresse e-mail\n";
}
if(!empty($_GET['email'])){
	$email = $_GET['email'];
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	  echo "$email is a valid email address\n";
	} else {
	  echo "$email is not a valid email address\n";
	}

}
else{
	echo $_GET['nom'];
}
/*trim -> supprime les espaces*/
?>
