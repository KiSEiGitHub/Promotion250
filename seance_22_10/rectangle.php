<html lang="fr">
<head>
    <title>Rectangle</title>
    <meta charset="utf-8">
</head>
<body>
<center>
    <h1>Exercice Rectangle</h1>
    <p>écrire un script PHP qui calcule la surface et le périmètre d'un rectangle</p>
    <form action="rectangle.php" method="POST">

        <input type="text" name="longueur" placeholder="Longueur">
        <input type="text" name="Largeur" placeholder="Largeur">
        <input type="reset" value="Annuler">
        <input type="submit" name="btn" value="OK">

        <?php
        if (isset($_POST['btn'])) {
            if (!empty($_POST['longueur']) && !empty($_POST['Largeur'])) {
                $longueur = $_POST['longueur'];
                $largeur = $_POST['Largeur'];

                $sur = $longueur * $largeur;
                $peri = 2 * ($longueur * $largeur);

                echo "<p>surface : $sur";
                echo "<br>";
                echo "<p>Périmètre : $peri</p>";
            } else{
                echo "<p>il manque quelque chose</p>";
            }

        }


        ?>

    </form>
</center>
</body>
</html>