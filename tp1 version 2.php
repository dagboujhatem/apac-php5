<?php 
	// la variable titre stocke le titre de la page
	$titre = "Welcome to my Web site"
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $titre ?>
	</title>
</head>
<body>

	<?php 
		$hello = "Hello";
		$again = "again !!!";

		echo("<h1> $hello $again </h1>");

		// 2eme exemple  
		$firstname = "Ahmed";
		$lastname = "Mejri";

		echo("<h2> Votre nom est : $firstname $lastname </h2>");

		echo "<h2> Votre nom est : $firstname $lastname </h2>";

		echo "Votre nom est : " . $firstname . " " . $lastname;

	?>

</body>
</html>