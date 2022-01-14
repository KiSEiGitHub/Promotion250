<h4>Insertion intervention</h4>
<form action = "" method = "post">
    <div class = "input-block">
        <label for = "description">
            <input type = "text" name = "description" placeholder = "description" autocomplete = "off">
        </label>
        <label for = "dateinter">
            <input type = "text" name = "dateinter" placeholder = "dateinter" autocomplete = "off">
        </label>
    </div>
    <div class = "input-block">
        <label for = "prix">
            <input type = "text" name = "prix" placeholder = "prix" autocomplete = "off">
        </label>
        <label for = "idvehicule">
            <select name = "idvehicule">
                <?php
                $voitures = allVoiture();
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
                <?php
                $idtech = allTechnicien();
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
            <input type = "submit" name = "btn" class = "btn-sbt">
        </label>
        <label for = "reset">
            <input type = "reset" class = "btn-sbt">
        </label>
    </div>
    <?php insertIntervention(); ?>
</form>