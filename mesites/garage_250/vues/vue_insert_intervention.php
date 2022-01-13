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
            <input type = "number" name = "idvehicule" placeholder = "idvehicule" autocomplete = "off">
        </label>
    </div>
    <div class = "input-block">
        <label for = "idtechnicien">
            <input type = "number" name = "idtechnicien" placeholder = "idtechnicien" autocomplete = "off">
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