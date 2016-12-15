<?php
/**
//Fonction qui permet de forcer l'utilisation de caractère html dans les valeurs des tableaux
//@param : $array 
//on entre un tableau
//on boucle dessus en foreach
//à chaque index, il execute la fonction htmlspecialchars sur la valeur du tableau
//La fonction retourne le tableau entier où toutes les données ont été traitées
*/
function secureGet($array) 
{
	foreach ($array as $key => $value) {
		$array[$key] = htmlspecialchars($value);
	}
	return $array;
};
?>
			<figure>
				<a href="index.php"><img class="logo" src="image/zikoos.png" alt="Zikoos"></a>
			</figure>
			<nav>
				<ul class="header_ul">
					<li class="groupes"><a href="groupes2.php">Groupes</a></li>
					<li class="contribution"><a href="contributions.php">Contributions</a></li>
				</ul>
			</nav>
			<section class="clearfix">
				<div>

					<form action="groupes2.php" method="post">
						<input class="recherche" name="search" placeholder="Rechercher..." name="search" >
						<div class="buttonheader">
							<input class="valider" type="submit" id="valider" value="valider">
						</div>
					</form>
				</div>
				
					<a href="#"><img class="imgheader" src="image/avatar.png"></a>
			</section>