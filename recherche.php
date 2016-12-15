<?php
require_once "connect.php";

//Ca s'affiche pas à cause d'un truc qui finit pas, ça casse mon php

if(isset($_GET['type']))
{
    var_dump('LA BIIIIIIIITE');
    $type = htmlspecialchars($_GET['type']);

    $sql = "SELECT
    `type`, 
    `id`, 
    `band`, 
    `guitar1`, 
    `guitar2`, 
    `bass`, 
    `drum`, 
    `visible`, 
    `commentaire`
    FROM 
    `content`
    WHERE 
    `visible` = 1
    AND
    `type` = :type
    ;";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':type', $type, PDO::PARAM_STR);
    $stmt->execute();
}
/*else if(isset($_POST['search']))
{

	
    $post = htmlspecialchars($_POST['search']);
    
    
        $sql = "SELECT
        `type`, 
        `id`, 
        `band`, 
        `guitar1`, 
        `guitar2`, 
        `bass`, 
        `drum`, 
        `visible`, 
        `commentaire`
        FROM 
        `content`
        WHERE 
        visible = 1
        
        ";
    
//Ici il y aura peut-être un truc qui merde
//J'execute le PDO et j'incrémente dans ses valeurs après
//Soit ça casse mon while, parce qu'il devient juste la taille du premier elseif==true
//Soit il faut l'actualiser APRES la boucle (while)
        $stmt = $pdo->prepare($sql);
        //$stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
// var_dump($stmt);
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {	
        	echo "COOOOOUUUUUUUUUDEEEEEEESSSSSS";
        	var_dump($row.'<hr>');
            foreach ($row as $key => $value)
            {
                if($key == 'band' && $post == $value)
                {
                    header('Location: instruments.php?id='.$row['id']);
                } 
                elseif('%'.$post.'%' == $value)
                {
                    $sql.='`id` = '.$row['id'].', ';
//si plusieurs réusltats correspondent, j'ai pas besoin d'avoir un AND à rallonge avec plusieurs fois `id` = x, je sors du foreach;
//avec le while je prendrais une autre ligne que je pourrai boucler sa mère
                    break;
                }else{
//ça n'affiche rien si aucun résultat ne match
                    $sql.='`id` = 0';
                }
            }
        }
        var_dump($sql);
        
//au cas où on rentre rien
//dans la disposition de mes boucles, il n'y a pas la place pour ajouter 'AND(' puis 'blabla' puis ')'.
//Vu qu'on boucle en while au début des conditions, autant déclarer un 'AND ('' et sorti de la boucle on lui met une valeur qui sera toujours vraie (ici `id` contient un INT) et ferme la parenthèse à coup sûr au bon endroit. 
//On n'aura pas de problème de ',' après la dernière concaténation puisque la dernière est hors de la boucle
        //$sql.=');';


}*/
else
{
    var_dump('Jambon de dinde');
    $sql = "SELECT 
    `type`, 
    `id`, 
    `band`, 
    `guitar1`, 
    `guitar2`, 
    `bass`, 
    `drum`, 
    `visible`, 
    `commentaire` 
    FROM 
    `content` 
    WHERE 
    `visible` = :visible 
    ;";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':visible', 1);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Groupes</title>
        <link rel="stylesheet" type="text/css" href="styles/groupe.css">
        <link rel="icon" type="image/png" href="img-content/favicon.png">
    </head>
    <body>
        <h1>Les groupes</h1>
        <?php
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
            <section class="groupe1 clearfix">
                <article class="image">
                    <img src="image/legendII.png">
                </article>
                <article class="description">
                <h3><?=$row['band']?></h3>
                    <p><?=$row['commentaire']?></p>
                <div class="renvoi"><a href="instruments.php?id=<?=$row['id']?>">Voir les intruments</a></div>
                </article>
           </section>
        <?php endwhile;?>
    </body>
</html>


<!--
<?php 
/*

$sql = "SELECT 
    `type`, 
    `id`, 
    `band`, 
    `guitar1`, 
    `guitar2`, 
    `bass`, 
    `drum`, 
    `visible`, 
    `commentaire` 
FROM 
    `content` 
WHERE 
    `visible` = :visible 
    ;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':visible', 1);
$stmt->execute();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Groupes</title>
        <link rel="stylesheet" type="text/css" href="styles/groupe.css">
        <link rel="icon" type="image/png" href="img-content/favicon.png">
    </head>
    <body>
        <h1>Les groupes</h1>
        <?php
//        if(isset($_GET)){
//            var_dump('HAHAHAHA');
//        }
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
            <section class="groupe1 clearfix">
                <article class="image">
                    <img src="image/legendII.png">
                </article>
                <article class="description">
                <h3><?=$row['band']?></h3>
                    <p><?=$row['commentaire']?></p>
                <div class="renvoi"><a href="instruments.php?id=<?=$row['id']?>">Voir les intruments</a></div>
                </article>
           </section>
        <?php endwhile; 
            endif;*/?>
    </body>
</html>
-->