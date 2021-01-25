<!DOCTYPE html>
<html>
<head>
	<title>TP4 en PHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<form class="offset-3 col-6 mt-3" method="post" action="save.php">
				<h1 class="text-center text-primary mb-3">Création d'un compte client</h1>
				<div class="form-group">
					<label for="nom">Nom :</label>
					<input type="text" name="nom" id="nom" placeholder="Saisissez votre nom ici" class="form-control">
				</div>
				<div class="form-group">
					<label for="prenom">Prénom :</label>
					<input type="text" name="prenom" id="prenom" placeholder="Saisissez votre prénom ici" class="form-control">
				</div>
				<div class="form-group">
					<label for="gouvernorat">Gouvernorat :</label>
					<select name="gouvernorat" id="gouvernorat" class="form-control">
						<option value="" selected disabled>Veuillez sélectionner un gouvernorat</option>
						<option value="Ariana">Ariana</option>
						<option value="Béja">Béja</option>
						<option value="Ben Arous">Ben Arous</option>
						<option value="Bizerte">Bizerte</option>
						<option value="Gabès">Gabès</option>
						<option value="Gafsa">Gafsa</option>
						<option value="Jendouba">Jendouba</option>
						<option value="Kairouan">Kairouan</option>
						<option value="Kasserine">Kasserine</option>
						<option value="Kébili">Kébili</option>
						<option value="Le Kef">Le Kef</option>
						<option value="Mahdia">Mahdia</option>
						<option value="La Manouba">La Manouba</option>
						<option value="Médenine">Médenine</option>
						<option value="Monastir">Monastir</option>
						<option value="Nabeul">Nabeul</option>
						<option value="Sfax">Sfax</option>
						<option value="Sidi Bouzid">Sidi Bouzid</option>
						<option value="Siliana">Siliana</option>
						<option value="Sousse">Sousse</option>
						<option value="Tataouine">Tataouine</option>
						<option value="Tozeur">Tozeur</option>
						<option value="Tunis">Tunis</option>
						<option value="Zaghouan">Zaghouan</option>
					</select>
				</div>
				<div class="form-group">
					<label for="email">E-mail :</label>
					<input type="email" name="email" id="email" placeholder="Saisissez votre adresse e-mail ici" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Mot de de passe :</label>
					<input type="password" name="password" id="password" placeholder="Saisissez votre mot de passe ici" class="form-control">
				</div>
				<div class="form-group">
					<label for="passwordconfirmation">Confirmer votre mot de passe :</label>
					<input type="password" name="passwordconfirmation" id="passwordconfirmation"
					 placeholder="Saisissez la confirmation de votre mot de passe ici" class="form-control">
				</div>
				<div>
					<input type="submit" value="S'inscrire" class="btn btn-primary btn-block">
				</div>
			</form>
		</div>
	</div>
</body>
</html>