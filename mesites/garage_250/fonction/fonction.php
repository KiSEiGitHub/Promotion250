<?php
function connexion()
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );;

    if ($con == null) {
        echo "Erreur de connexion à la bdd";
    }
    return $con;
}

function deconnexion($con)
{
    mysqli_close($con);
}

function Insert(
    $table_name,
    $DB1, $DB2, $DB3, $DB4, $DB5, $DB6,
    $VAL1, $VAL2, $VAL3, $VAL4, $VAL5, $VAL6,
    $length
)
{
    $con = connexion();

    if ($length == 6) {
        $sql = "INSERT INTO $table_name($DB1, $DB2, $DB3, $DB4, $DB5, $DB6) VALUES ('$VAL1', '$VAL2', '$VAL3', '$VAL4', '$VAL5', '$VAL6')";
    } else if ($length == 5) {
        $sql = "INSERT INTO $table_name($DB1, $DB2, $DB3, $DB4, $DB5) VALUES ('$VAL1', '$VAL2', '$VAL3', '$VAL4', '$VAL5')";
    }


    if (mysqli_query($con, $sql)) {
        echo "<p class='sucess'>Nouveau utilisateur</p>";
    } else {
        echo "<p class='error'>Une erreur est survenue</p>";
    }
}

function Delete($table, $id, $id2)
{
    $con = connexion();

    if ($con) {
        $r = "delete from $table where $id2 = " . $id;
        mysqli_query($con, $r);
        mysqli_close($con);
    }

}

function Select($table)
{
    $r = "SELECT * FROM $table";
    $con = connexion();
    if ($con) {
        $lesClients = mysqli_query($con, $r);

    } else {
        return null;
    }
    deconnexion($con);
    return $lesClients;
}

function selectWhereClient($idclient)
{
    $r = "select * from client where idclient = " . $idclient;
    $con = connexion();

    if ($con) {
        $LesClients = mysqli_query($con, $r);
        $unClients = mysqli_fetch_assoc($LesClients);
    } else {
        return null;
    }

    deconnexion($con);
    return $unClients;
}

function UpdateClient($tab)
{
    $r = "update client set nom = '" . $tab['nom'] . "', prenom = '" . $tab['prenom'] . "', adresse = '" . $tab['adresse'] . "', email = '" . $tab['mail'] . "', mdp = '" . $tab['mdp'] . "', tel = '" . $tab['tel'] . "' where idclient = " . $tab['idclient'];

    $con = connexion();
    if ($con) {
        mysqli_query($con, $r);
    }

    deconnexion($con);
}

function searchClient($mot)
{
    $r = "select * from client where nom like '%" . $mot . "%' or prenom like '%" . $mot . "%';";
    $con = connexion();

    if ($con) {
        $lesClients = mysqli_query($con, $r);
    } else {
        return null;
    }

    deconnexion($con);
    return $lesClients;
}

function selectWhereTechnicien($idtech)
{
    $r = "select * from technicien where idtechnicien = " . $idtech;
    $con = connexion();

    if ($con) {
        $LesTech = mysqli_query($con, $r);
        $unTechs = mysqli_fetch_assoc($LesTech);
    } else {
        return null;
    }

    deconnexion($con);
    return $unTechs;
}

function UpdateTech($tab, $tech)
{
    $r = "update technicien set nom = '" . $tab['nom'] . "', prenom = '" . $tab['prenom'] . "', qualification = '" .
        $tab['qualification'] .
        "', email = '" . $tab['mail'] . "', mdp = '" . $tab['mdp'] . "', tel = '" . $tab['tel'] . "' where idtechnicien = " . $tech;

    $con = connexion();
    if ($con) {
        mysqli_query($con, $r);
    }

    deconnexion($con);
}

function searchTech($mot)
{
    $r = "select * from technicien where nom like '%" . $mot . "%' or prenom like '%" . $mot . "%';";
    $con = connexion();

    if ($con) {
        $lesTech = mysqli_query($con, $r);
    } else {
        return null;
    }

    deconnexion($con);
    return $lesTech;
}