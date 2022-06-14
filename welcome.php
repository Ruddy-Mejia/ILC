<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="css/menu.css">
    <script src="js/jquery1111.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <style type="text/css">
        body {
            background-color: #5d6d7e;
            font: 14px sans-serif;
            text-align: center;
            color: white;
        }

        .myfont {
            color: #fff;
            font-weight: bolder;
            font-family: 'PT Sans', sans-serif;
        }
    </style>
</head>

<div style="background:url(images/art2.png) no-repeat fixed 50%">
    <header class="zerogrid">
        <div class="logo"><img src="images/logo4.png" /></div>
        <div id='cssmenu' class="align-center">
            <ul>
                <h1 class="myfont">MENÚ DE ADMINISTRADOR</h1>
                <br>
                <li class="active"><a href='index.html'><span>Inicio</span></a></li>
                <li><a href='reportes.php'><span>Reportes</span></a></li>
                <li><a href='agregar_hoteles.php'><span>Agregar hoteles</span></a></li>
                <li><a href='agregar_habitacion.php'><span>Agregar habitaciones</span></a></li>
                <li><a href='register.php'><span>Registrar nuevo administrador</span></a></li>
                <li><a href='reset-password.php'><span>Cambia de contraseña</span></a></li>
                <li><a href='logout.php'><span>Cerrar sesión</span></a></li>
                <br><br><iframe width="560" height="315" src="https://www.youtube.com/embed/T0Gi5Fz1SJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </ul>
        </div>
    </header>
    <br><br><br>


</body>

</html>