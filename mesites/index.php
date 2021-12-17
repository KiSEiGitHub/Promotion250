<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Bienvuenue sur le site Garage JGCM</h1>
    <a href="index.php?page=0">
        <img src="images/home.png" alt="" height="60" width="60">
    </a>

    <a href="index.php?page=1">
        <img src="images/client.png" alt="" height="60" width="60">
    </a>

    <a href="index.php?page=2">
        <img src="images/intervention.png" alt="" height="60" width="60">
    </a>

    <a href="index.php?page=3">
        <img src="images/technicien.png" alt="" height="60" width="60">
    </a>

    <a href="index.php?page=4">
        <img src="images/vehicule.png" alt="" height="60" width="60">
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
</body>
</html>