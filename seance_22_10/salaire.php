<html lang="fr">
<head>
    <title>Moyenne</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice calculer salaire</h1>
    <p>écrire un script PHP qui calcule le salaire</p>
    <form action="salaire.php" method="post">
        <input type="number" name="heure" placeholder="Heure">
        <input type="number" name="jour" placeholder="Jour">
        <input type="number" name="benef" placeholder="Benef">
        <input type="number" name="pourcentage" placeholder="Pourcentage">
        <input type="number" name="remu" placeholder="Rémunération">
        <input type="submit" name="btn" value="OK">
        <?php
        if (isset($_POST['btn'])) {
            if (!empty($_POST['heure']) || !empty($_POST['jour']) || !empty($_POST['benef']) || !empty($_POST['pourcentage']) || !empty($_POST['remu'])) {

                $heure = $_POST['heure'];
                $jour = $_POST['jour'];
                $benef = $_POST['benef'];
                $pour = $_POST['pourcentage'];
                $remu = $_POST['remu'];


                $SB = $remu * $jour * $heure;
                $Prime = $pour * $benef / 100;
                $salaire = $SB + $Prime;

                echo "<p>Salaire : $salaire</p>";
            } else {
                echo "<p>Il manque un truc</p>";
            }
        }
        ?>
    </form>
</center>
</body>
</html>