<?php 
    require_once('connect.php');
    

if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
} else {
    header('Location: recherche.php');
}

$sql = "SELECT
`id`,
`type`,
`band`,
`guitar1`,
`bass`,
`drum`,
`amp`,
`commentaire` 
FROM 
  `content`
WHERE 
id = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$row){
    header('Location: groupes2.php');
} 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Instruments</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
</head>
<body>
    <header>
        <?php
            require_once('header.php');
        ?>
    </header>
    
    <section class="modification">
        <div class="boutton"><a href="modifier.php?id=<?=$row['id']?>">Modification</a>
        </div>
        
    </section>
    <section class="illustration clearfix">
       <div class="reglage"> 
        <article class="gauche">
       <img src="img-content/legendII.png"/>
       </article>
        <article class="droite">
       <h2><?=$row['band'];?></h2>
       <p><?=$row['commentaire'];?></p>
       <div class="genre"><?=$row['type'];?></div>
        </article>

       </div>

    </section>

    <section class="groupe1 clearfix">
        <div class="contenant">
            
                <article class="guitare">
                    <h2>Guitare</h2>
                    <h3><?=$row['guitar1']?></h3>
                    <img src="img-content/guitare-1.png">
                    
    
                </article>  

                <article class="basse">
                    <h2>Basse</h2>
                     <h3><?=$row['bass']?></h3>
                    <img src="img-content/basse-1.png">
                    

                </article>

                <article class="batterie">
                    <h2>Batterie</h2>
                     <h3><?=$row['drum']?></h3>
                    <img src="img-content/batterie.png">

                </article>

                <article class="Amplificateur">
                    <h2>Amplificateur</h2>
                     <h3><?=$row['amp'];?></h3>                
                    <img src="img-content/ampli-1.png">

                </article>
        </div>
    </section>

    <footer>
        <?php
            require_once('footer.php');
        ?>
    </footer>

</body>
</html>