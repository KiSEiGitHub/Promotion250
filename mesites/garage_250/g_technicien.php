<h3 style = "font-size: 32px">Gestion technicien</h3>
<?php
$leTechnicien = null;

if (isset($_GET['action']) && isset($_GET['idtechnicien'])) {
    if ($_GET['action'] == 'sup') {
        Delete("technicien", $_GET['idtechnicien'], "idtechnicien");
    } else if ($_GET['action'] == 'edit') {
        $leTechnicien = selectWhereTechnicien($_GET['idtechnicien']);
    }
}

require_once 'vues/vue_insert_technicien.php';

if (isset($_POST['btn'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['qualification']) && !empty($_POST['mail']) &&
        !empty($_POST['mdp']) && !empty($_POST['tel'])) {
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
} else if (isset($_POST['Modifier'])) {
    UpdateTech($_POST, $_GET['idtechnicien']);
    header('Location: index.php?page=3');
}

$lesTechnicien = Select("technicien");
require_once 'vues/vue_les_technicien.php';

?>
