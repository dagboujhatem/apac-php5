<?php

// first step: récupération des valeurs à partir de HTML et en se basant sur les "names" de chaque input
$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_confirmation = $_POST["passwordconfirmation"];

echo ("<h1> Welcome $first_name $last_name $email $password </h1>");

// second step: vérifications des champs (non vides)
if (!isset($first_name)) {
	// Affichage d'erreur de first name 
	echo "first name is null <br>";
}
if (!isset($last_name)) {
	// Affichage d'erreur de last name 
	echo "last name is null <br>";
}
if (!isset($email)) {
	// Affichage d'erreur d' email
	echo "email is null <br>";
}
if (!isset($password)) {
	// Affichage d'erreur de password 
	echo "password is null <br>";
}
if (!isset($password_confirmation)) {	
	// Affichage d'erreur de password confirmation 
	echo "password confirmation is null <br>";
}

// step 3 : verification password and password confirmation is equal (is mutch)

// setp 4 : Connect to MySQL

$id_connection = mysqli_connect("localhost","root","");

if (!$id_connection) {
        die("Database connection failed: " . mysqli_connect_error());
}

// step 5 : Sélectionner une base de données 

$database = mysqli_select_db($id_connection, "apac-php5");

if (!$database) {
        die("Database selection failed: " . mysqli_connect_error());
}

// step 6 : Création d'une requette SQL

$requette = "INSERT INTO users (first_name, last_name, email, password)
VALUES ('$first_name', '$last_name', '$email', '$password');";

// Affichage de requette
echo($requette);

// step 7 : Exécution de requette

$resultat = mysqli_query($id_connection, $requette) or die(mysqli_connect_error());

// step 8 : Traitement de resultat (c'est-à-dire $resultat)

// step 9 : Close MySQL connection

mysqli_close($id_connection);

?>