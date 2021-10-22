<html lang="fr">
<head>
    <title>Moyenne</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice moyenne</h1>
    <p>écrire un script PHP qui calcule la moyenne de note</p>
    <form action="moyenne.php" method="post">
        <input type="number" name="n1" placeholder="Note 1">
        <input type="number" name="n2" placeholder="Note 2">
        <input type="number" name="n3" placeholder="Note 3">
        <input type="submit" name="btn" value="OK">
    </form>
    <?php
    $_note1 = $_POST['n1'];
    $_note2 = $_POST['n2'];
    $_note3 = $_POST['n3'];
    $somme = $_note1 + $_note2 + $_note3;
    $moy = round($somme / 3, 2);
    echo "<p>Moyenne : $moy</p>";
    ?>
</center>
</body>
</html>