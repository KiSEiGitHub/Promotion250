<h3> Liste des clients </h3>
<form action = "" method="POST">
    Nom de recherche : <input type="text" name="mot">
    <input type="submit" name="btn-search" value="rechercher" class="btn-primary">
</form>
<table class="table table-striped table-dark">
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
    foreach ($lesClients as $unClient) {
        echo "<tr>";
        echo "<td>" . $unClient['idclient'] . "</td>";
        echo "<td>" . $unClient['nom'] . "</td>";
        echo "<td>" . $unClient['prenom'] . "</td>";
        echo "<td>" . $unClient['adresse'] . "</td>";
        echo "<td>" . $unClient['email'] . "</td>";
        echo "<td>" . $unClient['tel'] . "</td>";
        echo "<td>";
        echo "<a href='index.php?page=1&action=sup&idclient=" . $unClient['idclient'] . "'>";
        echo "<button class='btn-danger  btn' name='btnDelete'>Supprimer</button>";
        echo "</a>";
        echo "<a href='index.php?page=1&action=edit&idclient=" . $unClient['idclient'] . "'>";
        echo "<button class='btn-primary btn'>Edit</button>";
        echo "</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>