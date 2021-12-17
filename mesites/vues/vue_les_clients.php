<h3> Liste des clients </h3>
<table border="1">
    <tr>
        <td>id client</td>
        <td>Nom client</td>
        <td>Prénom client</td>
        <td>Adresse</td>
        <td>Email</td>
        <td>Téléphone</td>
    </tr>
    <?php
    foreach ($lesClients as $unClient) {
        echo "<tr>";
            echo "<td>".$unClient['idclient']."</td>";
            echo "<td>".$unClient['nom']."</td>";
            echo "<td>".$unClient['adresse']."</td>";
            echo "<td>".$unClient['email']."</td>";
            echo "<td>".$unClient['tel']."</td>";
            echo "<td>".$unClient['prenom']."</td>";
        echo "</tr>";
    }
    ?>
</table>