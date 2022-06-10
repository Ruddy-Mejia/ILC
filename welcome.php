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

<body>
    <header class="zerogrid">
        <div class="logo"><img src="images/logo.png" alt="" /></div>
    </header>
    <div class="page-header">
        <h1 class="myfont">Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ a I LOVE COPACABANA</h1>

    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning myfont">Cambia tu contraseña</a>
        <a href="index.html" class="btn btn-danger myfont">Regresar a la pagina principal</a>
        <a href="logout.php" class="btn btn-warning myfont">Cierra la sesión</a>
        <br><br><iframe width="560" height="315" src="https://www.youtube.com/embed/T0Gi5Fz1SJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </p>
    <br><br><br>


</body>

</html>