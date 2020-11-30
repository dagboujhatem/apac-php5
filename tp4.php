<!DOCTYPE html>
<html>
<head>
	<title>TP4 en PHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<form class="offset-3 col-6 mt-5" method="post" action="signup.php">
				<div class="form-group">
					<label for="firstname">First name</label>
					<input type="text" name="firstname" id="firstname" placeholder="Type your first name here" class="form-control">
				</div>
				<div class="form-group">
					<label for="lastname">Last Name</label>
					<input type="text" name="lastname" id="lastname" placeholder="Type your last name here" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" name="email" id="email" placeholder="Type your e-mail here" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="Type your password here" class="form-control">
				</div>
				<div class="form-group">
					<label for="passwordconfirmation">Password Confirmation</label>
					<input type="password" name="passwordconfirmation" id="passwordconfirmation" placeholder="Type your password confirmation here" class="form-control">
				</div>
				<div>
					<input type="submit" value="Sign Up" class="btn btn-success btn-block">
				</div>
			</form>
		</div>
	</div>
</body>
</html>