<html lang="fr">
<head>
    <title>Moyenne</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice additionner heure minute seconde</h1>
    <p>écrire un script PHP qui addtionne heure minute seconde</p>
    <form action="add_heure_min_sec.php" method="post">
        <input type="number" name="H1" placeholder="Heure1">
        <input type="number" name="M1" placeholder="Minute1">
        <input type="number" name="S1" placeholder="Seconde1">
        <br><br>
        <input type="number" name="H2" placeholder="Heure2">
        <input type="number" name="M2" placeholder="Minute2">
        <input type="number" name="S2" placeholder="Seconde2">
        <br><br>
        <input type="submit" name="btn" value="OK">
        <?php
        if (isset($_POST['btn'])) {
            if (!empty($_POST['H1']) || !empty($_POST['M1']) || !empty($_POST['S1']) || !empty($_POST['H2']) || !empty($_POST['M2']) || !empty($_POST['S2'])) {

                $H1 = $_POST['H1'];
                $M1 = $_POST['M1'];
                $S1 = $_POST['S1'];

                $H2 = $_POST['H2'];
                $M2 = $_POST['M2'];
                $S2 = $_POST['S2'];

                $total_seconde = round(($S1 + $S2) % 60, 2);
                $total_minute = round(($M1 + $M2 + ($S1 + $S2) / 60) % 60, 2);
                $total_heure = round(($H1 + $H2 + ($M1 + $M2 + ($S1 + $S2) / 60) / 60) % 60, 2);

                echo "<p>$total_heure:$total_minute:$total_seconde</p>";
            } else {
                echo "<p>Il manque un truc</p>";
            }
        }
        ?>
    </form>
</center>
</body>
</html>