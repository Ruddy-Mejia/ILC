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

<body>
    <div class="wrap-body" style="background:  #5d6d7e">

        <!--////////////////////////////////////Header-->
        <header class="zerogrid">
            <div class="logo"><img src="images/logo.png" alt="" /></div>
            <div id='cssmenu' class="align-center">
                <ul>
                    <li class="active"><a href='index.html'><span>Inicio</span></a></li>
                    <li><a href='reservas.php'><span>Reservas</span></a></li>
                    <li><a href='galerias.html'><span>Galería</span></a></li>
                    <li class=' has-sub'><a href='#'><span>Tour virtual</span></a>
                        <ul>
                            <li><a href='tour.html'><span>Calvario</span></a>
                            </li>
                            <li><a href='tour1.html'><span>Playa</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href='info.html'><span>Más Información</span></a></li>
                    <li><a href='agregar_hoteles.php'><span>Agregar hoteles</span></a></li>
                    <li><a href='eliminar_hoteles.php'><span>Eliminar hoteles</span></a></li>
                    <li><a href='agregar_habitacion.php'><span>Agregar habitaciones</span></a></li>
                </ul>
            </div>
        </header>


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
        <br><br><br>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ilc");
        if (!$conn) {
            die("No hay conexion: " . mysqli_connect_error());
        }
        ?>


        <div class="mycontainer" style="text-align: center; margin:auto;">
            <?php
            $ss = mysqli_query($conn, "SELECT *FROM habitacion");
            while ($rr = mysqli_fetch_array($ss)) {
            ?>
                <div class="myelement">
                <p class="myfont" style="color:#fff;">TIPO</p>
                    <?php echo $rr['tipo']; ?>
                </div>
                <div class="myelement">
                    <p class="myfont" style="color:#fff;">PRECIO P/NOCHE</p>
                    <?php echo $rr['precio']. " BOB"; ?>
                </div>
                <div class="myelement1">
                    <?php echo $rr['descripcion']; ?>                    
                </div>
                <div>
                    <img style="width: 400px;" src="data:image/png; base64, <?php echo base64_encode($rr['imagen']); ?>">
                </div>
                <div class="mycontainer" style="border:0px;">
                    <button type="submit" class="btn btn-primary" name="reservar">Reservar</button>
                </div>
                <br><br><br>
            <?php } ?>
        </div>
        </form>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.esm.js"></script>
        <script src="js/bootstrap.esm.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </div>
</body>