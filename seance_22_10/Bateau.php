<html lang="fr">
<head>
    <title>Moyenne</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice calculer heure minute seconde Bateau</h1>
    <p>écrire un script PHP pour calculer heure minute seconde Bateau</p>
    <form action="Bateau.php" method="post">
        <input type="number" name="LG" placeholder="Longueur">
        <input type="number" name="HT" placeholder="Hauteur">
        <input type="number" name="VT" placeholder="Vitesse">
        <input type="submit" name="btn" value="OK">
        <?php
        if (isset($_POST['btn'])) {
            if (!empty($_POST['LG']) || !empty($_POST['HT']) || !empty($_POST['VT'])) {

                $LG = $_POST['LG'];
                $HT = $_POST['HT'];
                $VT = $_POST['VT'];

                $D = sqrt(pow($LG, 2) - pow($HT, 2));
                $T = ($D / $VT) * 3600;0
                $H = round($T /3600);
                $M = round(($T %3600) / 60);
                $S = round(($T % 3600) % 60);

                echo "<p>Temps: $H:$M:$S</p>";
            } else {
                echo "<p>Il manque un truc</p>";
            }
        }
        ?>
    </form>
</center>
</body>
</html>