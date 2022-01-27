<h3 style="font-size: 32px">Gestion véhicule</h3>
<?php
require_once 'vues/vue_insert_vehicule.php';

if (isset($_GET['action']) && isset($_GET['idvehicule'])) {
    if ($_GET['action'] == 'sup') {
        Delete('vehicule', 'idvehicule', $_GET['idvehicule']);
    }
}

if (isset($_POST['btn'])) {
    if (
        !empty($_POST['matricule']) && !empty($_POST['marque']) && !empty($_POST['datecirculation']) && !empty($_POST['nbkm']) &&
        !empty($_POST['idclient'])
    ) {
        Insert(
            "vehicule",
            "matricule",
            "marque",
            "datecirculation",
            "nbkm",
            "idclient",
            "null",
            $_POST['matricule'],
            $_POST['marque'],
            $_POST['datecirculation'],
            $_POST['nbkm'],
            $_POST['idclient'],
            "null",
            5
        );
    } else {
        echo "<p class='alert-danger'>Remplir tous les champs</p>";
    }
}
$lesVehicule = Select("vehicule");
require_once 'vues/vue_les_vehicule.php';
?>