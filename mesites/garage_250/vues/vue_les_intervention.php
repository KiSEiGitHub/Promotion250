<h3> Liste des interventions </h3>
<table>
    <tr>
        <td>ID</td>
        <td>description</td>
        <td>date intervention</td>
        <td>prix</td>
        <td>idvehicule</td>
        <td>idtechnicien</td>
        <td>Opération</td>
    </tr>
    <?php
    $lesIntervention = allIntervetion();
    foreach ($lesIntervention as $intervention) {
        echo "<tr>";
        echo "<td>" . $intervention['idintervention'] . "</td>";
        echo "<td>" . $intervention['description'] . "</td>";
        echo "<td>" . $intervention['dateinter'] . "</td>";
        echo "<td>" . $intervention['prix'] . "</td>";
        echo "<td>" . $intervention['idvehicule'] . "</td>";
        echo "<td>" . $intervention['idtechnicien'] . "</td>";
        echo "<td>";
        echo "<td>";
        echo "<a href='index.php?page=2&action=sup&idintervention=".$intervention['idintervention']."'>";
        echo "<button class='btn-danger btn'>Supprimer</button>";
        echo "</a>";
        echo "<a href='index.php?page=2&action=edit&idintervention='" . $intervention['idintervention'] . "'>";
        echo "<button class='btn-primary btn'>Edit</button>";
        echo "</a>";
        echo "</td>";
        echo "</tr>";

    }
    ?>
</table>