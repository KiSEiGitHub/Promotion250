<html lang="fr">
<head>
    <title>Moyenne</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice additionner date</h1>
    <p>écrire un script PHP qui addtionne date</p>
    <form action="add_date.php" method="post">
        <input type="number" name="M1" placeholder="Mois1">
        <input type="number" name="A1" placeholder="Année1">
        <input type="number" name="S1" placeholder="Sciècle1">
        <br><br>
        <input type="number" name="M2" placeholder="Mois2">
        <input type="number" name="A2" placeholder="Année2">
        <input type="number" name="S2" placeholder="Sciècle2">
        <br><br>
        <input type="submit" name="btn" value="OK">
        <?php
        if (isset($_POST['btn'])) {
            if (!empty($_POST['M1']) || !empty($_POST['A1']) || !empty($_POST['S1']) || !empty($_POST['M2']) || !empty($_POST['A2']) || !empty($_POST['S2'])) {

                $M1 = $_POST['M1'];
                $A1 = $_POST['A1'];
                $S1 = $_POST['S1'];

                $M2 = $_POST['M2'];
                $A2 = $_POST['A2'];
                $S2 = $_POST['S2'];

                $annee = round(($A1 + $A2 + ($M1 + $M2) % 12) % 100, 2);
                $mois = round(($M1 + $M2) % 12, 2);
                $scicle = round(($S1 + $S2 + ($M1 + $M2 + ($A1 + $A2) % 100) % 12) % 10, 2);
    
                echo "<p>$mois:$annee:$scicle</p>";
            } else {
                echo "<p>Il manque un truc</p>";
            }
        }
        ?>
    </form>
</center>
</body>
</html>