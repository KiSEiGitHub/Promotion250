<h3 style = "font-size: 32px">Gestion client</h3>
<?php
$leClient = null;
$lesVoiture = null;
if (isset($_GET['action']) && isset($_GET['idclient'])) {
    if ($_GET['action'] == 'sup') {
        Delete('client', 'idclient', $_GET['idclient']);
        header('Location: index.php?page=1');
    } else if ($_GET['action'] == 'edit') {
        $leClient = selectWhereClient($_GET['idclient']);
        // var_dump($leClient);
    } else if ($_GET['action'] == 'voiture') {
        $lesVoiture = selectVehiculelesClients($_GET['idclient']);
    }
}

require_once 'vues/vue_insert_client.php';

if (isset($_POST['btn'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['mail']) &&
        !empty($_POST['mdp']) && !empty($_POST['tel'])) {
        Insert(
            "client",
            "nom",
            "prenom",
            "adresse",
            "email",
            "mdp",
            "tel",
            $_POST['prenom'],
            $_POST['nom'],
            $_POST['adresse'],
            $_POST['mail'],
            $_POST['mdp'],
            $_POST['tel'],
            6
        );
    } else {
        echo "<p class='alert-danger'>Remplir les champs !</p>";
    }
} else if (isset($_POST['Modifier'])) {
    UpdateClient($_POST);
    header('Location: index.php?page=1');
}

if (isset($_POST['btn-search'])) {
    $lesClients = searchClient($_POST['mot']);
} else {
    $lesClients = Select('client');
}

require_once 'vues/vue_les_clients.php';

if ($lesVoiture != null) {
    $p = $_GET['prenom'];
    echo "<h2>Liste des voitures de $p</h2>";
    require_once("vues/vue_les_vehicule_client.php");
}

?>
