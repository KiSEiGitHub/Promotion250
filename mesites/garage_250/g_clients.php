<h3 style = "font-size: 32px">Gestion client</h3>
<?php

require_once 'vues/vue_insert_client.php';

if (isset($_GET['action']) && isset($_GET['idclient'])) {
    if ($_GET['action'] == 'sup') {
        Delete('client', 'idclient', $_GET['idclient']);
    }
}

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
}

require_once 'vues/vue_les_clients.php';

?>
