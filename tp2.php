<!DOCTYPE html>
<html>
<head>
	<title>2éme TP en PHP</title>
</head>
<body>

	<?php

			// Définir une constante qui s'appelle TVA
			define("TVA", 0.1);

			// Prix HT d'un produit
			$prix_ht = 120;

			// Calcul de prix final
			$prix = $prix_ht + ($prix_ht * TVA);

			// Affichage de résultat
			echo "Prix : $prix Euro";

	?>

</body>
</html>