<h3> Liste des clients </h3>
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
    $lesClients = selectAllclient();
    foreach ($lesClients as $unClient) {
        echo "<tr>";
        echo "<td>" . $unClient['idclient'] . "</td>";
        echo "<td>" . $unClient['nom'] . "</td>";
        echo "<td>" . $unClient['prenom'] . "</td>";
        echo "<td>" . $unClient['adresse'] . "</td>";
        echo "<td>" . $unClient['email'] . "</td>";
        echo "<td>" . $unClient['tel'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>