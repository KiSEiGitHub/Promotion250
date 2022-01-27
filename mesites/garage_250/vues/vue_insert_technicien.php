<h4>Insertion technicien</h4>
<form action="" method="post">
    <div class="input-block">
        <label for="prénom">
            <input type="text" name="prenom" placeholder="Prénom" autocomplete="off" value="<?php if ($leTechnicien != null) echo $leTechnicien['prenom']; ?>">
        </label>
        <label for="nom">
            <input type="text" name="nom" placeholder="Nom" autocomplete="off" value="<?php if ($leTechnicien != null) echo $leTechnicien['nom']; ?>">
        </label>
    </div>
    <div class="input-block">
        <label for="Qualification">
            <input type="text" name="qualification" placeholder="Qualification" autocomplete="off" value="<?php if ($leTechnicien != null) echo $leTechnicien['qualification']; ?>">
        </label>
        <label for="mail">
            <input type="email" name="mail" placeholder="Email" autocomplete="off" value="<?php if ($leTechnicien != null) echo $leTechnicien['email']; ?>">
        </label>
    </div>
    <div class="input-block">
        <label for="mot de passe">
            <input type="password" name="mdp" placeholder="mot de passe" autocomplete="off" value="<?php if ($leTechnicien != null) echo $leTechnicien['mdp']; ?>">
        </label>
        <label for="tel">
            <input type="text" name="tel" placeholder="Téléphone" autocomplete="off" value="<?php if ($leTechnicien != null) echo $leTechnicien['tel']; ?>">
        </label>
    </div>
    <div class="input-block">
        <label for="submut">
            <input type="submit" class="btn-sbt" <?php
                                                    if ($leTechnicien != null) {
                                                        echo 'name = "Modifier" value = "Modifier"';
                                                    } else {
                                                        echo 'name = "btn" value = "Valider"';
                                                    }
                                                    ?>>
        </label>
        <label for="reset">
            <input type="reset" class="btn-sbt">
        </label>
    </div>
</form>