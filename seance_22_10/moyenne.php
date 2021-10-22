<html lang="fr">
<head>
    <title>Moyenne</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice moyenne</h1>
    <p>écrire un script PHP qui calcule la moyenne de note</p>
    <form action="moyenne.php" method="POST">
        <?php
        echo "<input type='number' name='nb' placeholder='Nombre de note'>";
        echo "<input type='submit' name='btn' value='OK'>";
        if (isset($_POST['btn'])) {
            $nb_note = $_POST['nb'];
            echo "<p>Veuillez rentrer $nb_note</p>";
            $somme = 0;
            for ($i = 1; $i < $nb_note + 1; $i++) {
                echo "<form method='POST' action='moyenne.php'>";
                    echo "<input type='number' name='note' placeholder='note $i'>";
                    echo "<input type='submit' name='btn2' value='OK'>";
                echo "</form>";
            }
        } else {
            echo " ";
        }
        ?>
    </form>
</center>
</body>
</html>