<html lang="fr">
<head>
    <title>Moyenne</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice calculer Aire</h1>
    <p>écrire un script PHP qui calcule l'Aire'</p>
    <form action="Aire.php" method="post">
        <input type="number" name="RT" placeholder="RT">
        <input type="number" name="RL" placeholder="RL">
        <input type="number" name="TL" placeholder="TL">
        <input type="number" name="Rayon" placeholder="Rayon">
        <input type="submit" name="btn" value="OK">
        <?php
        if (isset($_POST['btn'])) {
            if (!empty($_POST['RT']) || !empty($_POST['RL']) || !empty($_POST['TL']) || !empty($_POST['Rayon'])) {

                $RT = $_POST['RT'];
                $RL = $_POST['RL'];
                $TL = $_POST['TL'];
                $Rayon = $_POST['Rayon'];

                $A1 = $TL * $RT * 2;
                $A2 = ($Rayon - $RL) * $TL;
                $Aire = $A1 + $A2;
                echo "<p>Aire : $Aire</p>";
            } else {
                echo "<p>Il manque un truc</p>";
            }
        }
        ?>
    </form>
</center>
</body>
</html>