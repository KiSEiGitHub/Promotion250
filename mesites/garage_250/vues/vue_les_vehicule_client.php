<table class = "table table-dark table-striped">
    <tr>
        <td> Id Véhicule</td>
        <td> Matricule</td>
        <td> Marque</td>
        <td> Date de circulation</td>
        <td> Nombre km</td>
    </tr>
    <?php
    foreach ($lesVoiture as $unVehicule) {
        echo "<tr>";
        echo "<td>" . $unVehicule['idvehicule'] . "</td>";
        echo "<td>" . $unVehicule['matricule'] . "</td>";
        echo "<td>" . $unVehicule['marque'] . "</td>";
        echo "<td>" . $unVehicule['datecirculation'] . "</td>";
        echo "<td>" . $unVehicule['nbkm'] . "</td>";
        echo "<td>";

    }
    ?>


</table>