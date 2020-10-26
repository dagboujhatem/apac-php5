<?php 
	// la variable titre stocke le titre de la page
	$titre = "Welcome PHP"

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
			echo $titre
		?>
	</title>
</head>
<body>

	<?php
		# affichage de contenu de la page 
		$welcome = "Hello";
		$again = "Again !!";
		echo("<h1> $welcome $again </h1>");


		// Affichage de deux variables avec la concaténation
		$firstname = "Ahmed";
		$lastname = "Mejri";
		echo "Votre nom est : " . $firstname . " " . $lastname;

		# 2éme manière de le faire
		echo "<br>";
		echo ("Votre nom est : $firstname $lastname ");

	?>

</body>
</html>