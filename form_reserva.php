<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="clases.css">
    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="mystyle.css">
    <script src="js/jquery1111.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <style>
        .myfont {
            color: #333333;
            font-weight: bolder;
            font-family: 'PT Sans', sans-serif;

        }
    </style>


</head>

<body style="background:url(images/art2.png) no-repeat fixed 50%">
    <header class="zerogrid">
        <div id='cssmenu' class="align-right">
            <ul>
                <li><a href='login.php'><span>Inicia sesión</span></a>
                </li>
            </ul>
        </div>
        <div class="logo"><img src="images/logo4.png" alt="" /></div>
        <div id='cssmenu' class="align-center">
            <ul>
                <li class="active"><a href='index.html'><span>Inicio</span></a></li>
                <li><a href='reservas.php'><span>Hoteles</span></a></li>
                <li><a href='tour.php'><span>Tour virtual</span></a></li>
                <li><a href='info.html'><span>Más Información</span></a></li>
            </ul>
        </div>
    </header>

    <body>

        


        <form method="POST" action="new.php" style="width: 600px; margin: auto;">
            <?php

            $id = $_POST['reservar'];
            echo "<script> alert('id = $id');</script>";
            ?>
            <div>
                <label class="myfont">NOMBRES</label>
                <input type="text" class="form-control" name="nombres">
            </div>
            <br>
            <div>
                <label class="myfont">APELLIDOS</label>
                <input type="text" class="form-control" name="apellidos">
            </div>
            <br>
            <div>
                <label class="myfont">EMAIL</label>
                <input type="text" class="form-control" name="email">
            </div>
            <br>
            <div>
                <label class="myfont">FECHA DE ENTRADA</label>
                <input type="date" class="form-control" name="entrada">
            </div>
            <br>
            <div>
                <label class="myfont">FECHA SALIDA:</label>
                <input type="date" class="form-control" name="salida">
            </div>
            <br>
            <div style="width: 600px; height: 300px;" class="form-group" class="boton">
                <button type="submit" class="btn btn-primary myfont" value="<?php echo $id; ?>" style="color: white;" name="guardar">Guardar</button>
            </div>

        </form>



        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.esm.js"></script>
        <script src="js/bootstrap.esm.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>

</html>