<?php
$conn = mysqli_connect("localhost", "root", "", "ilc");
if (!$conn) {
    die("No hay conexion: " . mysqli_connect_error());
}
?>

<body style="background:  #5d6d7e">
    <div class="logo"><img src="images/logo.png" alt="" /></div>
    <div class="wrap-body">

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
            <link rel="stylesheet" href="clases.css">
            <script src="js/jquery1111.min.js" type="text/javascript"></script>
            <script src="js/script.js"></script>



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
        <header class="zerogrid">
            <div class="logo"><img src="images/logo.jpg" alt=""></div>
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
                </ul>
            </div>
        </header>
        
        <div class="mycontainer" style="text-align: center; margin:auto;">
            <?php
            $palabra = $_POST['palabra'];
            $query = "select * from hotel where nombre = '$palabra'";
            $ss = mysqli_query($conn,$query);
            while ($rr = mysqli_fetch_array($ss)) {
            ?>
                <div class="myelement">
                    <?php echo $rr['nombre']; ?>
                </div>
                <div class="myelement1">
                    <?php echo $rr['descripcion']; ?>
                    <br><br>
                    <p>Compartir</p>
                    <a href="<?php echo $rr['ubicacion']; ?>">
                        <i class="bi bi-share-fill"></i>
                    </a>
                </div>
                <div>
                    <img style="width: 400px;" src="data:image/png; base64, <?php echo base64_encode($rr['imagen']); ?>">
                </div>
                <div class="mycontainer" style="border:0px;">
                    <button type="submit" class="btn btn-primary" name="reservar">Reservar en <?php echo $rr['nombre'];?></button>
                </div>
                <br><br><br>
            <?php } ?>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.esm.js"></script>
        <script src="js/bootstrap.esm.min.js"></script>
        <script src="js/bootstrap.js"></script>
</body>