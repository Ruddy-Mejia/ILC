<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <script src="plotly/jquery-3.3.1.min.js"></script>
    <script src="plotly/plotly-latest.min.js"></script>
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/jquery1111.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <style>
        .myfont {
            color: #fff;
            font-weight: bolder;
            font-family: 'PT Sans', sans-serif;
            font-size: xx-large;
        }

        .mycontainer {
            width: 80%;
            background: #212f3d;
            border: 5px solid #95a5a6;
            display: flex;
            display: -webkit-flex;
            display: -ms-flexbox;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
        }
    </style>
</head>


<div class="wrap-body" style="background:url(images/art2.png) no-repeat fixed 50%">

    <header class="zerogrid">
        <div class="logo"><img src="images/logo4.png" alt="" /></div>
        <div id='cssmenu' class="align-center">
            <ul>
                <li class="active"><a href='index.html'><span>Inicio</span></a></li>
                <li><a href='reportes.php'><span>Reportes</span></a></li>
                <li><a href='agregar_hoteles.php'><span>Agregar hoteles</span></a></li>
                <li><a href='agregar_habitacion.php'><span>Agregar habitaciones</span></a></li>
                <li><a href='register.php'><span>Registrar nuevo administrador</span></a></li>
                <li><a href='reset-password.php'><span>Cambia de contraseña</span></a></li>
                <li><a href='logout.php'><span>Cerrar sesión</span></a></li>
            </ul>
        </div>
    </header>
    <br><br>
    <div class="mycontainer" style="margin:auto;text-align:center;">
        <label class="myfont">Indice de nuevas reservas</label>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ilc");
        if (!$conn) {
            die("No hay conexion: " . mysqli_connect_error());
        }
        ?>

        <?php
        $cont = 1;
        $us = array();
        $times = array();

        $ss = mysqli_query($conn, "SELECT fecha from reportes order by fecha");
        while ($rr = mysqli_fetch_array($ss)) {
            $us[$cont] = $cont;
            $times[$cont] = $rr['fecha'];
            $cont++;
        }
        $datosX = json_encode($us);
        $datosY = json_encode($times);
        ?>

        <div id="graficaBarras"></div>

        <script type="text/javascript">
            function crearCadenaBarras(json) {
                var parsed = JSON.parse(json);
                var arr = [];
                for (var x in parsed) {
                    arr.push(parsed[x]);
                }
                return arr;
            }
        </script>
        <script type="text/javascript">
            datosX = crearCadenaBarras('<?php echo $datosX ?>');
            datosY = crearCadenaBarras('<?php echo $datosY ?>');

            var data = [{
                x: datosX,
                y: datosY,
                type: 'scatter',
                line: {
                    color: 'rgb(23, 32, 42)'
                }
            }];
            Plotly.newPlot('graficaBarras', data);
        </script>
        </body>
    </div>
    <br><br><br>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.esm.js"></script>
<script src="js/bootstrap.esm.min.js"></script>
<script src="js/bootstrap.js"></script>

</html>