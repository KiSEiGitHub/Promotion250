<?php
function connexion()
{
    $con = connexion();

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
    $r = "SELECT * FROM $table;";
    $con = connexion();
    if ($con) {
        $lesClients = mysqli_query($con, $r);

    } else {
        return null;
    }
    deconnexion($con);
    return $lesClients;
}
