<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
	<header>
		<?php
			require_once('header.php');
		?>	
	</header>
	<main class="clearfix">
		<form id="formulaire" class="clearfix" action="add.php" method="post" name="setBand">
			<h2>Contributions</h2>
			<hr class="line">
			<div class="texture">
				<p>
					Ajoutez les instruments de vos artistes favoris. 
				</p>
			</div>
			<div class= "namegroupe">
				<h3 >Nom du groupe</h3>
				<input type="text" id="nom" name="band" placeholder="" required>
			</div>
			<div class="critere clearfix" >
				<div class= "choiceimage">
					<h3>Image</h3>
					<input type="file">
				</div>
				<div class= "choicegenre">
					<h3>Genre</h3>
				<select id="metier" name="Genre">
						<option value"type">Pop</option>
						<option value"type">Heavy Metal</option>
						<option value"type">Blues</option>
						<option value"type">Grunge</option>
						<option value"type">Indie</option>
				</select>
				</div>
			</div>
		
			<section class="critereguit clearfix">
				<div class= "instrumentguit">
					<h3>Guitare</h3>
					<input type="text" id="nom" name="guitar1" placeholder="" required>
				</div>
				<div class= "instrumentbasse">
					<h3>Basse</h3>
					<input type="text" id="nom" name="bass" placeholder="" required>
				</div>
			</section>
			<section class="critereinstru clearfix">
				<div class= "instrumentbatterie">
					<h3>Batterie</h3>
					<input type="text" id="nom" name="drum" placeholder="" required>
				</div>
				<div class= "instrumentampli">
					<h3>Ampli</h3>
					<input type="text" id="nom" name="amp" placeholder="" required>
				</div>
			</section>
			<div class= "instrumentcomment" style="padding-right: 42%;">
					<h3>Commentaires</h3>
					<textarea placeholder="" name="commentaire" style="width: 100%;"></textarea>
			</div>

			<button>Valider</button>
		</form>

	<footer>

		<?php

			require_once('footer.php');
		?>
		
	</footer>
</body>
</html>