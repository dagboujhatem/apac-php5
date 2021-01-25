<?php

// Step 1: récupération des valeurs à partir de HTML et en se basant sur les "names" de chaque input
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$gouvernorat = $_POST["gouvernorat"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_confirmation = $_POST["passwordconfirmation"];

// Step 2: vérifications des champs (non vides)

if (isset($nom) && $nom === "") {
	die("Le champ nom est obligatoire.");
}
if (isset($prenom) && $prenom === "") {
	die("Le champ prénom est obligatoire.");
}
if (isset($gouvernorat) && $gouvernorat === "") {
	die("Le champ gouvernorat est obligatoire.");
}
if (isset($email) && $email === "") {
	die("Le champ e-mail est obligatoire.");
}
if (isset($password) && $password === "") {
	die("Le champ mot de passe est obligatoire.");
}
if (isset($password_confirmation) && $password_confirmation === "") {	
	die("Le champ confirmation de mot de passe est obligatoire.");
}

// step 3 : verification si le mot de passe et sa confirmation sont égaux

if ($password === $password_confirmation) {
	// Succès (sont égaux) 
	$password = md5($password);
 }
 else {
	// échoué :(
	die("Veuillez saisir deux mot de passe égaux.");
 }

// setp 4 : Connect to MySQL

$id_connection = mysqli_connect("localhost","root","");

if (!$id_connection) {
        die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// step 5 : Sélectionner une base de données 

$database = mysqli_select_db($id_connection, "apac-php5");

if (!$database) {
        die("La sélection de la base de données a échoué: " . mysqli_connect_error());
}

// step 6 : Création d'une requette SQL

$requette = "INSERT INTO clients (nom, prenom, gouvernorat, email, password)
VALUES ('$nom', '$prenom', '$gouvernorat', '$email', '$password');";

// step 7 : Exécution de requette

$resultat = mysqli_query($id_connection, $requette) or die(mysqli_connect_error());

// step 8 : Traitement de resultat (c'est-à-dire $resultat)

echo("<h1> Bonjour $nom $prenom, vous êtes bien inscrit dans notre plateforme. </h1> ");

// step 9 : Close MySQL connection

mysqli_close($id_connection);

?>