<?php
require_once 'fonction/fonction.php';
?>

<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>Site </title>
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel = "stylesheet"
          integrity = "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin = "anonymous">
    <link rel = "stylesheet" href = "css/style.css">
    <link rel = "stylesheet" href = "css/Form.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class = "container">
    <h1>Bienvuenue sur le site Garage JGCM</h1>
    <a href = "index.php?page=0">
        <i class = "fas fa-home fa-3x"></i>
    </a>

    <a href = "index.php?page=1">
        <i class = "fas fa-users-cog fa-3x"></i>
    </a>

    <a href = "index.php?page=2">
        <i class = "fas fa-arrow-circle-up fa-3x"></i>
    </a>

    <a href = "index.php?page=3">
        <i class = "fab fa-accessible-icon fa-3x"></i>
    </a>

    <a href = "index.php?page=4">
        <i class = "fas fa-car fa-3x"></i>
    </a>

    <?php
    if (isset($_GET["page"])) {
        $page = $_GET['page'];
    } else {
        $page = 0;
    }

    switch ($page) {
        case 0:
            require_once("home.php");
            break;
        case 1:
            require_once("g_clients.php");
            break;
        case 2:
            require_once("g_intervention.php");
            break;
        case 3:
            require_once("g_technicien.php");
            break;
        case 4:
            require_once("g_vehicule.php");
            break;
    }

    ?>
</div>
<footer>
    <div class = "contact">
        <span class = "h3">Contact </span>
        <span class = "h5">: 01.02.03.04.06</span>
    </div>
</footer>
</body>

</html>