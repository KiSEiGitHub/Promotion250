<?php
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


function selectAllclient()
{
    $r = "SELECT * FROM client;";
    $con = connexion();
    if ($con) {
        $lesClients = mysqli_query($con, $r);
        var_dump($lesClients);
    } else {
        return null;
    }
    deconnexion($con);
    return $lesClients;
}


function insertClient($tab)
{

}

?>