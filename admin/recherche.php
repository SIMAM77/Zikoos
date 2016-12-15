<?php
require_once "connect.php";
if(isset($_GET['type']))
{
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
else if(isset($_POST['search']))
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
        AND (
            `type` LIKE :search
            OR `band` LIKE :search
            OR `guitar1` LIKE :search        
            OR `guitar2` LIKE :search
            OR `bass` LIKE :search  
            OR `drum` LIKE :search  
            OR `visible` LIKE :search     
            OR `commentaire` LIKE :search                   
            )
        ";
    
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':search', '%'.$post.'%', PDO::PARAM_STR);
        $stmt->execute();     
}
else
{
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