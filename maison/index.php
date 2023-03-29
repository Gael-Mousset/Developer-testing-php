<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test applicatif</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Test applicatif</h1>

    <form method="post" action="">
        <label for="nbHouses1">Nombre de maisons vertes :</label>
        <input type="number" name="nbHouses1" id="nbHouses1" value="<?php echo $nbHouses1; ?>"><br>
        <label for="nbHouses2">Nombre de maisons bleues :</label>
        <input type="number" name="nbHouses2" id="nbHouses2" value="<?php echo $nbHouses2; ?>"><br>
        <input type="submit" value="Dessiner les maisons">
    </form>

    <?php
    include 'MyHouse.php';
    include 'MyHouse1.php';
    include 'MyHouse2.php';

    $nbHouses1 = isset($_POST['nbHouses1']) ? $_POST['nbHouses1'] : 0;
    $nbHouses2 = isset($_POST['nbHouses2']) ? $_POST['nbHouses2'] : 0;

    for ($i=0; $i<$nbHouses1; $i++) {
        $house = new MyHouse1();
        echo $house->generate();
    }

    for ($i=0; $i<$nbHouses2; $i++) {
        $house = new MyHouse2();
        echo $house->generate();
    }
    ?>
    
</body>
</html>
