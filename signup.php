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

?>