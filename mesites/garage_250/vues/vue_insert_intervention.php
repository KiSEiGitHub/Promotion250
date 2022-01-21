<h4>Insertion intervention</h4>
<form action = "" method = "post">
    <div class = "input-block">
        <label for = "description">
            <textarea name = "description" rows = "3" cols = "30">
                <?php
                if ($lintervetion != null) echo $lintervetion['description']
                ?>
            </textarea>
        </label>
        <label for = "dateinter">
            <input type = "text" name = "dateinter" placeholder = "dateinter" autocomplete = "off"
                   value = "<?php if ($lintervetion != null) echo $lintervetion['dateinter']; ?>">
        </label>
    </div>
    <div class = "input-block">
        <label for = "prix">
            <input type = "text" name = "prix" placeholder = "prix" autocomplete = "off"
                   value = "<?php if ($lintervetion != null) echo $lintervetion['prix']; ?>">
        </label>
        <label for = "idvehicule">
            <select name = "idvehicule">
                <option value = ""></option>
                <?php
                $voitures = Select('vehicule');
                foreach ($voitures as $voiture) {
                    echo "<option value='" . $voiture['idvehicule'] . "'>";
                    echo $voiture['matricule'] . " " . $voiture['marque'];
                    echo "</option>";
                }
                ?>
            </select>
        </label>
    </div>
    <div class = "input-block">
        <label for = "idtechnicien">
            <select name = "idtechnicien">
                <option value = ""></option>
                <?php
                $idtech = Select('technicien');
                foreach ($idtech as $techtech) {
                    echo "<option value='" . $techtech['idtechnicien'] . "'>";
                    echo $techtech['prenom'] . " " . $techtech['nom'];
                    echo "</option>";
                }
                ?>
            </select>
        </label>
    </div>
    <div class = "input-block">
        <label for = "submut">
            <input type = "submit" class = "btn-sbt"
                <?php
                if ($lintervetion != null) {
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