<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    require_once "../connexion.php";
    $sql="insert into produit values(NULL,'CABLE RJ45',1.5,2000,'blablabla','https://picsum.photos/200/200',1)";
    $connexion=new connexion();
    $pdo=$connexion->getConnexion();
    $res=$pdo->exec($sql);
    if ($res){
        echo "insertion reussite";
    }
    else echo "probleme dinsertion";
    ?>
</body>
</html>