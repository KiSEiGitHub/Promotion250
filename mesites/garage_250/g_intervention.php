<h3 style = "font-size: 32px">Gestion interventions</h3>
<?php
require_once 'vues/vue_insert_intervention.php';

if (isset($_GET['action']) && isset($_GET['idintervention'])) {
    if ($_GET['action'] == 'sup') {
        delIntervention($_GET['idintervention']);
    }

}

require_once 'vues/vue_les_intervention.php';
?>