<h3 style = "font-size: 32px">Gestion véhicule</h3>
<?php
require_once 'vues/vue_insert_vehicule.php';

if (isset($_GET['action']) && isset($_GET['idvehicule'])) {
        if($_GET['action'] == 'sup'){
            DelVoiture($_GET['idvehicule']);
    }

}

require_once 'vues/vue_les_vehicule.php';
?>
