<h3 style = "font-size: 32px">Gestion technicien</h3>
<?php
require_once 'vues/vue_insert_technicien.php';

if (isset($_GET['action']) && isset($_GET['idtechnicien'])) {
    if ($_GET['action'] == 'sup') {
        delTech($_GET['idtechnicien']);
    }
}

require_once 'vues/vue_les_technicien.php';

?>
