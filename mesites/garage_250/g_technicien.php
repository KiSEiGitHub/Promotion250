<h3 style = "font-size: 32px">Gestion technicien</h3>
<?php
require_once 'vues/vue_insert_technicien.php';

if (isset($_GET['action']) && isset($_GET['idtechnicien'])) {
    if ($_GET['action'] == 'sup') {
        Delete("technicien", $_GET['idtechnicien'], "idtechnicien");
    }
}

if(isset($_POST['btn'])){
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['qualification']) && !empty($_POST['mail']) &&
            !empty($_POST['mdp']) && !empty($_POST['tel'])){
        Insert(
            "technicien",
            "nom",
            "prenom",
            "qualification",
            "email",
            "mdp",
            "tel",
            $_POST['prenom'],
            $_POST['nom'],
            $_POST['qualification'],
            $_POST['mail'],
            $_POST['mdp'],
            $_POST['tel'],
            6
        );
    } else {
        echo "<p class='alert-danger'>Remplir tous les champs</p>";
    }
}

require_once 'vues/vue_les_technicien.php';

?>
