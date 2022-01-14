<h3> Liste des techniciens </h3>
<table>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Adresse</td>
        <td>Email</td>
        <td>Téléphone</td>
        <td>Opération</td>
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
        echo "<td>";
        echo "<a href='index.php?page=3&action=sup&idtechnicien=" . $unTechnicien['idtechnicien'] . "'>";
        echo "<button class='btn-danger  btn' name='btnDelete'>Supprimer</button>";
        echo "</a>";
        echo "<a href='index.php?page=3&action=edit&idtechnicien=" . $unTechnicien['idtechnicien'] . "'>";
        echo "<button class='btn-primary btn'>Edit</button>";
        echo "</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>