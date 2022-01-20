<?php $leClient = selectWhereClient($_GET['idclient']); ?>

<h4>Insertion client</h4>
<form action = "" method = "post">
    <div class = "input-block">
        <label for = "prénom">
            <input type = "text" name = "prenom" placeholder = "Prénom" autocomplete = "off"
                   value = "<?php if ($leClient != null) echo $leClient['prenom']; ?>">
        </label>
        <label for = "nom">
            <input type = "text" name = "nom" placeholder = "Nom" autocomplete = "off"
                   value = "<?php if ($leClient != null) echo $leClient['nom']; ?>">
        </label>
    </div>
    <div class = "input-block">
        <label for = "Adresse">
            <input type = "text" name = "adresse" placeholder = "Adresse" autocomplete = "off"
                   value = "<?php if ($leClient != null) echo $leClient['adresse']; ?>">
        </label>
        <label for = "mail">
            <input type = "email" name = "mail" placeholder = "Email" autocomplete = "off"
                   value = "<?php if ($leClient != null) echo $leClient['email']; ?>">
        </label>
    </div>
    <div class = "input-block">
        <label for = "mot de passe">
            <input type = "password" name = "mdp" placeholder = "mot de passe" autocomplete = "off"
                   value = "<?php if ($leClient != null) echo $leClient['mdp']; ?>">
        </label>

        <?php
        if ($leClient != null) {
            echo "<input type='hidden' name='idclient' value='" . $leClient['idclient'] . "'>";
        }
        ?>

        <label for = "tel">
            <input type = "text" name = "tel" placeholder = "Téléphone" autocomplete = "off"
                   value = "<?php if ($leClient != null) echo $leClient['tel']; ?>">
        </label>
    </div>
    <div class = "input-block">
        <label for = "submut">
            <input type = "submit" class = "btn-sbt"
                <?php
                if ($leClient != null) {
                    echo 'name = "Modifier" value = "Modifier"';
                } else {
                    echo 'name = "btn" value = "Valider"';
                }
                ?>
            >
        </label>
        <label for = "reset">
            <input type = "reset" class = "btn-sbt">
        </label>
    </div>
</form>