<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <title>I Love Copacabana</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS -->
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



    <!-- my styles -->
    <link rel="stylesheet" href="clases.css">

    <style>
        .myfont {
            color: #333333;
            font-weight: bolder;
            font-family: 'PT Sans', sans-serif;
        }

        .mycontainer {
            width: 90%;
            background: #212f3d;
            padding: 10px;
            border: 5px solid #95a5a6;
            margin: 20px;

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
        <div id='cssmenu' class="align-right">
            <ul>
                <li><a href='login.php'><span>Inicia sesión</span></a>
                </li>
            </ul>
        </div>
    </header>
    <div class="wrap-body">

        <!--////////////////////////////////////Header-->
        <header class="zerogrid">
            <div class="logo"><img src="images/logo4.png" /></div>
            <div id='cssmenu' class="align-center">
                <ul>
                    <li class="active"><a href='index.html'><span>Inicio</span></a></li>
                    <li><a href='reservas.php'><span>Hoteles</span></a></li>
                    <li><a href='tour.php'><span>Tour virtual</span></a></li>
                    <li><a href='info.html'><span>Más Información</span></a></li>
                </ul>
            </div>
        </header>
        <br><br>


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="width: 600px; text-align:center; margin:auto;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/calvario.jpg" class="d-block w-100" alt="..." style="width: 350px;height: 350px">
                </div>
                <div class="carousel-item">
                    <img src="images/Playa.jpg" class="d-block w-100" alt="..." style="width: 350px;height: 350px">
                </div>
                <div class="carousel-item">
                    <img src="images/Chinkana.jpg" class="d-block w-100" alt="..." style="width: 350px;height: 350px">
                </div>
            </div>
        </div>


        <div align="center">
            <div align="center" style="width: 500px;">
                <form action="consulta.php" method="POST">
                    <div class="row mb-3">
                        <label class="col-sm-12 col-form-label myfont" style="color:#fff;">Buscar por nombre: </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="palabra">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="buscar">Buscar</button>
                </form>
            </div>
        </div>
        <br><br><br>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ilc");
        if (!$conn) {
            die("No hay conexion: " . mysqli_connect_error());
        }
        ?>

        <form method="POST" class="mycontainer" action="habitacion.php" style="text-align: center; margin:auto;">
            <?php
            $ss = mysqli_query($conn, "SELECT *FROM hotel");
            while ($rr = mysqli_fetch_array($ss)) {
            ?>
                <div class="myelement">
                    <?php echo $rr['nombre']; ?>
                </div>
                <div class="myelement1">
                    <?php echo $rr['descripcion']; ?>
                    <br><br>
                    <a href="<?php echo $rr['ubicacion']; ?>">
                        <i class="bi bi-geo-alt-fill"> Ubicación</i>
                    </a>
                </div>
                <div>
                    <img style="width: 500px;" src="data:image/*; base64, <?php echo base64_encode($rr['imagen']); ?>">
                </div>
                <div class="mycontainer" style="border:0px; text-align:center; width:100%;">
                    <button type="submit" class="btn btn-primary" name="id_hotel" value="<?php echo $rr['id_hotel']; ?>">Reservar en <?php echo $rr['nombre']; ?></button>
                </div>
                <br><br><br>
            <?php }
            ?>
        </form>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.esm.js"></script>
        <script src="js/bootstrap.esm.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </div>
</body>