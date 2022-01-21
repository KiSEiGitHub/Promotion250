<h4>Connexion</h4>

<form action = "" method = "post">
    <input type = "text" name = "pseudo" placeholder = "Pseudo">
    <input type = "text" name = "password" placeholder = "Mot de passe">
    <br>
    <input type = "submit" name = "btn-connexion" value = "Connexion">
    <?php
        if(isset($_POST['btn-connexion'])){
            AdminConnect($_POST['pseudo'], $_POST['password']);
        }
    ?>
</form>