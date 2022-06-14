<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <title>Reservas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="css/menu.css">
    <script src="js/jquery1111.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>

    <!--mis estilos-->
    <link rel="stylesheet" href="clases.css">

    <style>
        .myfont {
            color: #333333;
            font-weight: bolder;
            font-family: 'PT Sans', sans-serif;
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
        }
    </style>
</head>

<body style="background:url(images/art2.png) no-repeat fixed 50%">
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
                <li><a href='mostrar_reservas.php'><span>Lista de reservas</span></a></li>
                <li><a href='logout.php'><span>Cerrar sesión</span></a></li>
            </ul>
        </div>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ilc");
        if (!$conn) {
            die("No hay conexion: " . mysqli_connect_error());
        }
        $query = "SELECT reservas.nombres as 'nombre',reservas.apellidos as 'apellido',reservas.email as 'email',habitacion.tipo as 'tipo', hotel.nombre as 'hotel' FROM reservas INNER JOIN habitacion on reservas.id_habitacion = habitacion.id_habitacion INNER JOIN hotel on habitacion.id_hotel = hotel.id_hotel";
        ?>
        <table class="table table-striped table-dark">
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Email</td>
                <td>Tipo de habitación</td>
                <td>Hotel</td>
            </tr>
            <?php
            $ss = mysqli_query($conn, $query);
            while ($rr = mysqli_fetch_array($ss)) {
            ?>
                <tr>
                    <td><?php echo $rr['nombre']; ?></td>
                    <td><?php echo $rr['apellido']; ?></td>
                    <td><?php echo $rr['email']; ?></td>
                    <td><?php echo $rr['tipo']; ?></td>
                    <td><?php echo $rr['hotel']; ?></td>
                </tr>
            <?php  } ?>
        </table>
    </header>
    <br><br>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.esm.js"></script>
    <script src="js/bootstrap.esm.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>