<html lang="fr">
<head>
    <title>Moyenne</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice calculer total seconde</h1>
    <p>écrire un script PHP qui calcule le temps heure minute seconde en senconde</p>
    <form action="CalculerTemps.php" method="post">
        <input type="number" name="heure" placeholder="Heure">
        <input type="number" name="minute" placeholder="Minute">
        <input type="number" name="seconde" placeholder="Seconde">
        <input type="submit" name="btn" value="OK">
        <?php
        if (isset($_POST['btn'])) {
            if (!empty($_POST['heure']) || !empty($_POST['minute']) || !empty($_POST['seconde'])) {
                $heure = $_POST['heure'];
                $min = $_POST['minute'];
                $sec = $_POST['seconde'];

                $heure *= 3600;
                $min *= 60;
                $totla = $heure + $min + $sec;

                echo "<p>Seconde : $totla</p>";
            } else{
                echo "<p>Il manque un truc</p>";
            }
        }
        ?>
    </form>
</center>
</body>
</html>