<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Groupe Hypnos</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" Groupe Hypnos</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
			<ul class = "nav nav-pills">
			<li class = "active"><a href = "home.php">Accueil</a></li>
			<li><a href = "account.php">Gestion Utilisateurs</a></li>
			<li><a href = "reserve.php">Reservations</a></li>
			<li><a href = "room.php">Suites</a></li>			
		</ul>
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Compte / Nouveau Compte</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST">
						<div class = "form-group">
							<label>Nom </label>
							<input type = "text" class = "form-control" name = "name" />
						</div>
						<div class = "form-group">
							<label>Login </label>
							<input type = "text" class = "form-control" name = "username" />
						</div>
						<div class = "form-group">
							<label>mot de passe </label>
							<input type = "password" class = "form-control" name = "password" />
						</div>
					<div class = "form-group">
							<label> Role  </label>
							<select class = "form-control" required  name = "role">
								<option value = "">Choisir une option</option>
								<option value = "Standard">Admin</option>
								<option value = "Super Deluxe">Gérant</option>
								<option value = "Jr. Suite">Visiteur</option>
								<option value = "Executive Suite">  Client</option>
							</select>
						</div>
						<br />
						<div class = "form-group">
							<button name = "add_account" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php require_once 'add_query_account.php'?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright NEGIB 2022 </label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>