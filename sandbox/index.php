<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test applicatif</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Test applicatif</h1>
    <?php
    // inclusion des classes
    include 'MyHouse.php';
    include 'MyHouse1.php';
    include 'MyHouse2.php';

    // récupération des valeurs du formulaire s'il a été soumis
    $nb_houses_1 = isset($_POST['nb_houses_1']) ? $_POST['nb_houses_1'] : 0;
    $nb_houses_2 = isset($_POST['nb_houses_2']) ? $_POST['nb_houses_2'] : 0;

    // création des maisons de type 1
    for ($i=0; $i<$nb_houses_1; $i++) {
        $house = new MyHouse1();
        echo $house->generate();
    }

    // création des maisons de type 2
    for ($i=0; $i<$nb_houses_2; $i++) {
        $house = new MyHouse2();
        echo $house->generate();
    }
    ?>
    <form method="post" action="">
        <label for="nb_houses_1">Nombre de maisons vertes :</label>
        <input type="number" name="nb_houses_1" id="nb_houses_1" value="<?php echo $nb_houses_1; ?>"><br>
        <label for="nb_houses_2">Nombre de maisons bleues :</label>
        <input type="number" name="nb_houses_2" id="nb_houses_2" value="<?php echo $nb_houses_2; ?>"><br>
        <input type="submit" value="Dessiner les maisons">
    </form>
    <button onclick="colorizeHouses()">Colorier les maisons en rouge</button>
    <script>
        function colorizeHouses() {
            var houses = document.getElementsByClassName("house");
            for (var i = 0; i < houses.length; i++) {
                houses[i].style.backgroundColor = "red";
            }
        }
    </script>
</body>
</html>
