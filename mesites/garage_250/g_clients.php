<h3 style = "font-size: 32px">Gestion client</h3>
<?php

require_once 'vues/vue_insert_client.php';

if (isset($_GET['action']) && isset($_GET['idclient'])) {
    if ($_GET['action'] == 'sup') {
        delClient($_GET['idclient']);
    }

}

require_once 'vues/vue_les_clients.php';

?>
