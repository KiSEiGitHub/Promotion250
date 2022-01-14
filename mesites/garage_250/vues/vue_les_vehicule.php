<h3> Liste des voitures </h3>
<table>
    <tr>
        <td>ID</td>
        <td>matricule</td>
        <td>marque</td>
        <td>Date Circulation</td>
        <td>nbkm</td>
        <td>IdClient</td>
        <td>Opération</td>
    </tr>
    <?php
    $lesVehicule = allVoiture();
    foreach ($lesVehicule as $voiture) {
        echo "<tr>";
        echo "<td>" . $voiture['idvehicule'] . "</td>";
        echo "<td>" . $voiture['matricule'] . "</td>";
        echo "<td>" . $voiture['marque'] . "</td>";
        echo "<td>" . $voiture['datecirculation'] . "</td>";
        echo "<td>" . $voiture['nbkm'] . "</td>";
        echo "<td>" . $voiture['idclient'] . "</td>";
        echo "<td>";
        echo "<a href='index.php?page=4&action=sup&idvehicule=" . $voiture['idvehicule'] . "'>";
        echo "<button class='btn-danger  btn' name='btnDelete'>Supprimer</button>";
        echo "</a>";
        echo "<a href='index.php?page=4&action=edit&idvehicule=" . $voiture['idvehicule'] . "'>";
        echo "<button class='btn-primary btn'>Edit</button>";
        echo "</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>