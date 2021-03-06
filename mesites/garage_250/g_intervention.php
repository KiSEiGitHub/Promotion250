<h3 style="font-size: 32px">Gestion interventions</h3>
<?php
$lintervetion = null;

if (isset($_GET['action']) && isset($_GET['idintervention'])) {
    if ($_GET['action'] == 'sup') {
        Delete('intervention', 'idintervention', $_GET['idintervention']);
    } else if ($_GET['action'] == 'edit') {
        $lintervetion = selectWhereIntervention($_GET['idintervention']);
    }
}

require_once 'vues/vue_insert_intervention.php';

if (isset($_POST['btn'])) {
    if (
        !empty($_POST['description']) && !empty($_POST['dateinter']) && !empty($_POST['prix']) && !empty($_POST['idvehicule']) &&
        !empty($_POST['idtechnicien'])
    ) {
        Insert(
            "intervention",
            "description",
            "dateinter",
            "prix",
            "idvehicule",
            "idtechnicien",
            "null",
            $_POST['description'],
            $_POST['dateinter'],
            $_POST['prix'],
            $_POST['idvehicule'],
            $_POST['idtechnicien'],
            "null",
            5
        );
    } else {
        echo "<p class='alert-danger'>Remplir tous les champs</p>";
    }
}
$lesIntervention = Select('intervention');
require_once 'vues/vue_les_intervention.php';

?>