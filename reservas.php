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

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/jquery1111.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>



    <!-- my styles -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="wrap-body">

        <!--////////////////////////////////////Header-->
        <header class="zerogrid">
            <div class="logo"><img src="images/logo.jpg" alt="" /></div>
            <div id='cssmenu' class="align-center">
                <ul>
                    <li class="active"><a href='index.html'><span>Inicio</span></a></li>
                    <li><a href='Presentacion.html'><span>Presentación</span></a>

                    </li>
                    <li class=' has-sub'><a href='#'><span>Cultura</span></a>
                        <ul>
                            <li><a href='tradiciones.html'><span>Tradiciones</span></a>
                            </li>
                            <li><a href='fiestas.html'><span>Fiestas</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href='reservas.html'><span>Reservas</span></a></li>
                    <li><a href='galerias.html'><span>Galería</span></a></li>
                    <li><a href='tour_virtual.html'><span>Tour virtual</span></a></li>
                    <li><a href='agregar_hoteles.php'><span>Agregar hoteles</span></a></li>
                </ul>
            </div>
        </header>

        <center>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="width: 600px;">
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
        </center>
        
        <div align="center">
            <div align="center" style="width: 500px;">
                <form action="consulta.php" method="POST">
                    <div class="row mb-3">
                        <label class="col-sm-12 col-form-label">Buscar por nombre: </label>
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
        <table class="table table-bordered border-primary table-dark">
            <tr>
                <td>NOMBRE</td>
                <td>DESCRIPCION</td>
                <td>UBICACION</td>
                <td>IMAGEN</td>
            </tr>
            <?php
            $ss = mysqli_query($conn, "SELECT *FROM hotel");
            while ($rr = mysqli_fetch_array($ss)) {
            ?>
                <tr>
                    <td><?php echo $rr['nombre']; ?></td>
                    <td><?php echo $rr['descripcion']; ?></td>
                    <td><?php echo $rr['ubicacion']; ?></td>
                    <td>
                        <img class="mine" width="300px" src="data:image/png; base64, <?php echo base64_encode($rr['imagen']); ?>">
                    </td>
                </tr>
            <?php    } ?>
        </table>


        <?php
        if (isset($_REQUEST['buscar'])) {
            $nombre = $_POST['palabra'];
            $query = "select * from hotel where nombre = $nombre";
        }
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