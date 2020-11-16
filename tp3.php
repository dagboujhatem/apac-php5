<!DOCTYPE html>
<html>
<head>
	<title>TP3 en PHP</title>
</head>
<body>
	<?php
		// Définition d'un variable name de 3 manières:
		$name = null;
		// $name = null;
		// $name = "Ahmed";

		// Tester si le variable contient un valeur
		if(isset($name))
		{
			// Le name est définie
			echo("<h3>le name est définie: $name </h3>");
		}else{
			// Le name n'est pas définie
			echo("<h3>le name n'est pas définie </h3>");
		}

	?>
</body>
</html>