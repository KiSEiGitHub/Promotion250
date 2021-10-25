<html lang="fr">
<head>
    <title>Moyenne</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice film</h1>
    <p>écrire un script PHP qui calcule le temps que le chat a regarder le film</p>
    <form action="film.php" method="post">
        <input type="number" name="h" placeholder="Heure">
        <input type="number" name="m" placeholder="Minute">
        <input type="number" name="imc" placeholder="IMC">
        <input type="number" name="imh" placeholder="IMG">
        <input type="submit" name="btn" value="OK">
    </form>
    <?php
    $heure = $_POST['h'];
    $minute = $_POST['m'];
    $IMC = $_POST['imc'];
    $IMH = $_POST['imh'];

    $dfs = $heure * 3600 + $minute * 60;
    $r = ($IMC - $IMH) * $dfs;

    echo "<p>Temps : $r</p>";
    ?>
</center>
</body>
</html>