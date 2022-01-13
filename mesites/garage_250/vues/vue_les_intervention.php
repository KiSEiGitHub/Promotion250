<h3> Liste des interventions </h3>
<table>
    <tr>
        <td>ID</td>
        <td>description</td>
        <td>date intervention</td>
        <td>prix</td>
        <td>idvehicule</td>
        <td>idtechnicien</td>
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
        echo "</tr>";
    }
    ?>
</table>