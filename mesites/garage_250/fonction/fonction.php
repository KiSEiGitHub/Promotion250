<?php

function Insert(
    $table_name,
    $DB1, $DB2, $DB3, $DB4, $DB5, $DB6,
    $VAL1, $VAL2, $VAL3, $VAL4, $VAL5, $VAL6,
    $length
)
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );

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

function connexion()
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );

    if ($con == null) {
        echo "Erreur de connexion à la bdd";
    }
    return $con;
}

function deconnexion($con)
{
    mysqli_close($con);
}


function delClient($client)
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );

    if ($con) {
        $r = "delete from client where idclient = " . $client;
        mysqli_query($con, $r);
        mysqli_close($con);
    }
}
function delIntervention($inter)
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );

    if ($con) {
        $r = "delete from intervention where idintervention = " . $inter;
        mysqli_query($con, $r);
        mysqli_close($con);
    }
}
function delTech($tech)
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );

    if ($con) {
        $r = "delete from technicien where idtechnicien = " . $tech;
        mysqli_query($con, $r);
        mysqli_close($con);
    }
}
function DelVoiture($voiture)
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );

    if ($con) {
        $r = "delete from vehicule where idvehicule = " . $voiture;
        mysqli_query($con, $r);
        mysqli_close($con);
    }
}

function selectAllclient()
{
    $r = "SELECT * FROM client;";
    $con = connexion();
    if ($con) {
        $lesClients = mysqli_query($con, $r);

    } else {
        return null;
    }
    deconnexion($con);
    return $lesClients;
}
function allTechnicien()
{
    $r = "SELECT * FROM technicien;";
    $con = connexion();
    if ($con) {
        $lesTechnicien = mysqli_query($con, $r);

    } else {
        return null;
    }
    deconnexion($con);
    return $lesTechnicien;
}
function allVoiture()
{
    $r = "SELECT * FROM vehicule";
    $con = connexion();
    if ($con) {
        $lesTechnicien = mysqli_query($con, $r);

    } else {
        return null;
    }
    deconnexion($con);
    return $lesTechnicien;
}
function allIntervetion()
{
    $r = "SELECT * FROM intervention";
    $con = connexion();
    if ($con) {
        $lesTechnicien = mysqli_query($con, $r);

    } else {
        return null;
    }
    deconnexion($con);
    return $lesTechnicien;
}