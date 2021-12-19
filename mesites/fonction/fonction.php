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

    } else {
        return null;
    }
    deconnexion($con);
    return $lesClients;
}


function insertClient()
{

    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );

    if (isset($_POST['btn'])) {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['mail']) &&
            !empty($_POST['mdp']) && !empty($_POST['tel'])) {

            // variable
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $adresse = $_POST['adresse'];
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];
            $tel = $_POST['tel'];

            // requête sql pour insert
            $sql = "INSERT INTO client(nom, prenom, adresse, email, mdp, tel) VALUES ('$nom', '$prenom', '$adresse', '$mail', '$mdp', '$tel')";

            if (mysqli_query($con, $sql)) {
                echo "<p class='sucess'>Nouveau utilisateur</p>";
            } else {
                echo "<p class='error'>Une erreur est survenue</p>";
            }

            mysqli_close($con);
        } else {
            echo "<p class='error'>Veuillez remplir tous les champs</p>";
        }
    }

}

