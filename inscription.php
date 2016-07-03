<!DOCTYPE html>

<?php
			
include_once('connexion_bdd.php');

// On teste si le visiteur a soumis le formulaire
//if(isset($_POST['envoi']) && $_POST['envoi'] == 'envoi')
//{
	// on teste l'existance de nos variables et si elles ne sont pas vides
include_once('log.php');
//}


?>


<html>
<head>
<meta charset="utf-8" />
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<link href="css/signin.css" rel="stylesheet">
<link rel="icon" href="images/icon.png" />
<title>Inscription</title>
</head>

<body margin="0 auto">

<?php
	include_once("header_non_connected.php");
?>
<div class="container">
	<div class="jumbotron col-xs-10 col-md-8 col-lg-8">
		<form method="POST" action="inscription.php">
			<h3 align="center"><label>Inscription</label></h3>
			<div class="form-group">
				<label for="pseudo">Votre identifiant * : </label>
				<input id="pseudo" name="pseudo" type="text" class="form-control" value="<?php if (isset($_POST['pseudo'])) echo htmlentities(trim($_POST['pseudo'])); ?>" />
			</div>
			<div class="form-group">
				<label for="motdp">Mot de passe * : </label>
				<input id="motdp" name="motdp" type="password" class="form-control" value="<?php if (isset($_POST['motdp'])) echo htmlentities(trim($_POST['motdp'])); ?>" />
			</div>
			<div class="form-group">
				<label for="confirm">Confirmer le mot de passe * : </label>
				<input id="confirm" name="confirm" type="password" class="form-control" value="<?php if (isset($_POST['confirm'])) echo htmlentities(trim($_POST['confirm'])); ?>" />
			</div>

			<button class="btn btn-success" type="submit" id="envoi" >S' inscrire&nbsp;&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>
			<p>
				<br/>
				<span class="label label-info"> Les champs contenant * sont obligatoires, merci de les remplir!
				</span>
			</p>
			<p>
				<?php
					if (isset($erreur)) 
					{
						echo "<br />";
						echo('<span class="alert alert-danger" role="alert">' .$erreur. '</span>');
					}
				?>
			</p>

		</form>

	</div>
</div>
<script type="text/javascript" src="log.js"></script>

</body>
</html>
