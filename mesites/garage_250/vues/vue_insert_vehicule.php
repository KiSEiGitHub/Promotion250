<h4>Insertion voiture</h4>
<form action = "" method = "post">
    <div class = "input-block">
        <label for = "Matricule">
            <input type = "text" name = "matricule" placeholder = "Matricule" autocomplete = "off">
        </label>
        <label for = "Marque">
            <input type = "text" name = "marque" placeholder = "Marque" autocomplete = "off">
        </label>
    </div>
    <div class = "input-block">
        <label for = "DataCirculation">
            <input type = "text" name = "datecirculation" placeholder = "DataCirculation" autocomplete = "off">
        </label>
    </div>
    <div class = "input-block">
        <label for = "nbkm">
            <input type = "number" name = "nbkm" placeholder = "nbkm" autocomplete = "off">
        </label>
        <label for = "idclient">
            <select name = "idclient">
                <?php
                    $lesClients = Select('client');
                    foreach ($lesClients as $unClient){
                        echo "<option value='".$unClient['idclient']."'>";
                        echo $unClient['nom']." ".$unClient['prenom'];
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
</form>