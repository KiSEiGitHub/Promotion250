<h4>Insertion client</h4>
<form action = "" method = "post">
    <div class = "input-block">
        <label for = "prénom">
            <input type = "text" name = "prenom" placeholder = "Prénom" autocomplete = "off">
        </label>
        <label for = "nom">
            <input type = "text" name = "nom" placeholder = "Nom" autocomplete = "off">
        </label>
    </div>
    <div class = "input-block">
        <label for = "Adresse">
            <input type = "text" name = "adresse" placeholder = "Adresse" autocomplete = "off">
        </label>
        <label for = "mail">
            <input type = "email" name = "mail" placeholder = "Email" autocomplete = "off">
        </label>
    </div>
    <div class = "input-block">
        <label for = "mot de passe">
            <input type = "password" name = "mdp" placeholder = "mot de passe" autocomplete = "off">
        </label>
        <label for = "tel">
            <input type = "text" name = "tel" placeholder = "Téléphone" autocomplete = "off">
        </label>
    </div>
    <div class = "input-block">
        <label for = "submut">
            <input type = "submit" name = "btn" class = "btn-sbt">
        </label>
        <label for = "reset">
            <input type = "reset" class = "btn-sbt">
        </label>
    </div>
    <?php insertClient(); ?>
</form>