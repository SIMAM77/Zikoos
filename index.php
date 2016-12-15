<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Zikoos</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<header>
		<?php
			require_once('header.php');
		?>	
	</header>
	<main>
		<div class="caroussel">
			<?php

				require_once('carousel.php')
			?>
		</div>
		<div class="gratos">
		<div class="benco">
			<h3 class="labite">Sélectionnez votre registre musical</h3>
			<img class="arrow" src="image/fleche.png">
		</div>
		</div>
		<div class="gratos2">
		<ul class="moncul">
			<li>
				<a href="groupes2.php?type=Pop"><h4>Pop</h4></a>
				<a href="groupes2.php?type=Pop"><img src="image/pop.jpg"></a>
			</li>
			<li>
				<a href="groupes2.php?type=Heavy%20Metal"><h4>Heavy Metal</h4></a>
				<a href="groupes2.php?type=Heavy%20Metal"><img src="image/heavymetal.jpg"></a>
			</li>
			<li>
				<a href="groupes2.php?type=Blues"><h4>Blues</h4></a>
				<a href="groupes2.php?type=Blues"><img src="image/blues.jpg"></a>
			</li>
			<li>
				<a href="groupes2.php?type=Grunge"><h4>Grunge</h4></a>
				<a href="groupes2.php?type=Grunge"><img src="image/grunge.jpg"></a>
			</li>
			<li>
				<a href="groupes2.php?type=Indie"><h4>Indie</h4></a>
				<a href="groupes2.php?type=Indie"><img src="image/indie.jpg"></a>
			</li>
		</ul>
		</div>
		<p class="txt">Ou</p>
		<a href="contributions.php"><input class="formorange" type="submit" value="Contribuez au site"></a>
	</main>
	<footer>
		<?php

			require_once('footer.php');
		?>
	</footer>
</body>
</html>