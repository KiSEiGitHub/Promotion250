<h3 style = "font-size: 32px">Accueil du site</h3>

<img src = "images/logo.png" alt = "" width = "400px" height = "250px">

<p style = "font-size: 25px">
    Notre garage est le top des garages dans la région. Venez nous voir, nous serons ravis de vous accueillir et vous
    rendre service
</p>
<?php

$nbClients = CountAll("client");
$nbInt = CountAll("intervention");
$nbTech = CountAll("technicien");
$nbVoiture = CountAll("vehicule");

?>

<table class = "table table-striped table-dark">
    <tr>
        <td>Client(s)</td>
        <td>Intervention(s)</td>
        <td>Technicien(s)</td>
        <td>Voiture(s)</td>
    </tr>
    <tr>
        <?php
        echo "<td>$nbClients</td>";
        echo "<td>$nbInt</td>";
        echo "<td>$nbTech</td>";
        echo "<td>$nbVoiture</td>";
        ?>
    </tr>
</table>