<?php

?>

<!doctype html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<title>FORMULAIRE DE RESERVATION</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

			<script src="js/jquery-3.2.1.js"></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>


	</head>
<body>
<div class="container">
	<div class="page-header">
		<img class="img-responsive" src="photos/logo1.jpg" width= "300">
	</div>


<div class="container-fluid">
	<div class="col-md-8 col-md-offset-4">
	<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="text-center">Finissez-vous la réservation</h3>
		<br>
    <?php
    echo $_SESSION["a"];
    ?>
	</div>

	<div class="panel-body">
		<div class="row">
			<div class="col-md-10">
				<form>
					<div class="form-group row">
						<div class="col-md-4">
							<label for="name">Nom</label>
						</div>
						<div class="col-md-8">
							<input type="text" id="name" class="form-control" placeholder="Tapez votre nom">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-4">
							<label for="lastName">Prénom</label>
						</div>
						<div class="col-md-8">
							<input type="text" id="lastName" class="form-control" placeholder="Tapez votre prénom">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-4">
							<label for="email">E-mail</label>
						</div>
						<div class="col-md-8">
							<input type="text" id="email" class="form-control" placeholder="tapez votre email">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-4">
							<label for="phone">Télephone</label>
						</div>
						<div class="col-md-8">
							<input type="text" id="phone" class="form-control" placeholder="tapez votre numero de téléphone">
						</div>
					</div>
					</div>


		<center><div class="col-md-12"><button type="submit" class="btn btn-primary">Envoyer</button></div></center>

</body>
