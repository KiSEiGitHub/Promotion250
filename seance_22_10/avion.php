<html lang="fr">
<head>
    <title>Moyenne</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice additionner heure minute seconde</h1>
    <p>écrire un script PHP qui calcule le temps de entre chaque saut de soldat</p>
    <form action="avion.php" method="post">
        <input type="number" name="d" placeholder="distance">
        <input type="number" name="v" placeholder="vitesse">
        <input type="number" name="ns" placeholder="nombre soldat">
        <input type="number" name="p" placeholder="p">
        <br><br>
        <input type="submit" name="btn" value="OK">
        <?php
        if (isset($_POST['btn'])) {
            if (!empty($_POST['d']) || !empty($_POST['v']) || !empty($_POST['ns'])) {

                $d = $_POST['d'];
                $v = $_POST['v'];
                $ns = $_POST['ns'];
                $p = $_POST['p'];

                $t = $p / $v;
                $tps = $t * 3600;
                $tes = $tps / $ns;
                $h = round($tes / 3600, 2);
                $m = round(($tes / 3600) % 60, 2);
                $s = round(($tes % 3600) % 60);

                echo "<p>$h:$m:$s</p>";
            } else {
                echo "<p>Il manque un truc</p>";
            }
        }
        ?>
    </form>
</center>
</body>
</html>