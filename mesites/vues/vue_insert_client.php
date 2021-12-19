<h4>Insertion client</h4>
<form action="" method="post">
    <div class="input-block">
        <label for="prénom">
            <input type="text" name="prenom" placeholder="Prénom">
        </label>
        <label for="nom">
            <input type="text" name="nom" placeholder="Nom">
        </label>
    </div>
    <div class="input-block">
        <label for="Adresse">
            <input type="text" name="adresse" placeholder="Adresse">
        </label>
        <label for="mail">
            <input type="email" name="mail" placeholder="Email">
        </label>
    </div>
    <div class="input-block">
        <label for="mot de passe">
            <input type="password" name="mdp" placeholder="mot de passe">
        </label>
        <label for="tel">
            <input type="text" name="tel" placeholder="Téléphone">
        </label>
    </div>
    <div class="input-block">
        <label for="submut">
            <input type="submit" name="btn">
        </label>
        <label for="reset">
            <input type="reset">
        </label>
    </div>
    <?php insertClient(); ?>
</form>