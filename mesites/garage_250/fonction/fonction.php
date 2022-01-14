<?php

// optimiser fonction

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

function insertTechnicien()
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );

    if (isset($_POST['btn'])) {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['qualification']) && !empty($_POST['mail']) &&
            !empty($_POST['mdp']) && !empty($_POST['tel'])) {

            // variable
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $qualif = $_POST['qualification'];
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];
            $tel = $_POST['tel'];

            // requête sql pour insert
            $sql = "INSERT INTO technicien(nom, prenom, qualification, email, mdp, tel) VALUES ('$nom', '$prenom', '$qualif', '$mail', '$mdp', '$tel')";

            if (mysqli_query($con, $sql)) {
                echo "<p class='sucess'>Nouveau technicien</p>";
            } else {
                echo "<p class='error'>Une erreur est survenue</p>";
            }

            mysqli_close($con);
        } else {
            echo "<p class='error'>Veuillez remplir tous les champs</p>";
        }
    }
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

function insertVehicule()
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );

    if (isset($_POST['btn'])) {
        if (!empty($_POST['matricule']) && !empty($_POST['marque']) && !empty($_POST['datecirculation']) && !empty($_POST['nbkm']) &&
            !empty($_POST['idclient'])) {

            // variable
            $matricule = $_POST['matricule'];
            $marque = $_POST['marque'];
            $date = $_POST['datecirculation'];
            $nbkm = $_POST['nbkm'];
            $idclient = $_POST['idclient'];

            // requête sql pour insert
            $sql = "INSERT INTO vehicule(matricule, marque, datecirculation, nbkm, idclient) VALUES ('$matricule', '$marque', '$date', '$nbkm', '$idclient')";

            if (mysqli_query($con, $sql)) {
                echo "<p class='sucess'>Nouveau voiture</p>";
            } else {
                echo "<p class='error'>Une erreur est survenue</p>";
            }

            mysqli_close($con);
        } else {
            echo "<p class='error'>Veuillez remplir tous les champs</p>";
        }
    }
}

function insertIntervention()
{
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "garage_250"
    );

    if (isset($_POST['btn'])) {
        if (!empty($_POST['description']) && !empty($_POST['dateinter']) && !empty($_POST['prix']) && !empty($_POST['idvehicule']) &&
            !empty($_POST['idtechnicien'])) {

            // variable
            $Description = $_POST['description'];
            $DataInter = $_POST['dateinter'];
            $Prix = $_POST['prix'];
            $IDVe = $_POST['idvehicule'];
            $idTech = $_POST['idtechnicien'];

            // requête sql pour insert
            $sql = "INSERT INTO intervention(description, dateinter, prix, idvehicule, idtechnicien) VALUES ('$Description', '$DataInter', '$Prix', '$IDVe', '$idTech')";

            if (mysqli_query($con, $sql)) {
                echo "<p class='sucess'>Nouveau intervention</p>";
            } else {
                echo "<p class='error'>Une erreur est survenue</p>";
            }

            mysqli_close($con);
        } else {
            echo "<p class='error'>Veuillez remplir tous les champs</p>";
        }
    }
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