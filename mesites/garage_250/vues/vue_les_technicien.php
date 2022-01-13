<h3> Liste des techniciens </h3>
<table>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Adresse</td>
        <td>Email</td>
        <td>Téléphone</td>
    </tr>
    <?php
    $lesTechnicien = allTechnicien();
    foreach ($lesTechnicien as $unTechnicien) {
        echo "<tr>";
        echo "<td>" . $unTechnicien['idtechnicien'] . "</td>";
        echo "<td>" . $unTechnicien['nom'] . "</td>";
        echo "<td>" . $unTechnicien['prenom'] . "</td>";
        echo "<td>" . $unTechnicien['qualification'] . "</td>";
        echo "<td>" . $unTechnicien['email'] . "</td>";
        echo "<td>" . $unTechnicien['tel'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>