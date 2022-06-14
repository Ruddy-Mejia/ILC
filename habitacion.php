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
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->

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
        
        body {
            background: url(images/art2.png) no-repeat fixed 50%;
        }
        /*
        body,
        .modal {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            transition: all 500ms ease;
            opacity: 0;
            visibility: hidden;
        }

        #btn-modal:checked~.modal {
            opacity: 1;
            visibility: visible;
        }

        .contenedor {
            width: 400px;
            height: 300px;
            margin: auto;
            background: #fff;
            box-shadow: 1px 7px 25px rgba(0, 0, 0, 0.6);
            transition: all 500ms ease;
            position: relative;
            transform: translateY(-30%);
        }

        #btn-modal:checked~.modal .contenedor {
            transform: translateY(0%);
        }

        .contenedor header {
            padding: 10px;
            background: #212f3d;
            color: #fff;
        }

        .contenedor label {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        #btn-modal {
            display: none;
        }

        .lbl-modal {
            background: #fff;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        */
    </style>

</head>

<body class="wrap-body">    
    <!--
    <div>
        <input type="checkbox" name="" id="btn-modal">
        <label for="btn-modal" class="lbl-modal">Abir modal</label>
        <div class="modal">
            <div class="contenedor">
                <header>Welcome</header>
                <label for="btn-modal">X</label>
                <div class="contenido">
                    <label for="">xd</label>
                    <input type="text" name="xd">

                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    -->
    <!--////////////////////////////////////Header-->
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
    <br><br><br>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "ilc");
    if (!$conn) {
        die("No hay conexion: " . mysqli_connect_error());
    }
    ?>

    <form action="form_reserva.php" method="POST" class="mycontainer" style="text-align: center; margin:auto;">
        <?php
        $id_hotel = $_POST['id_hotel'];
        $cont = 0;
        $ss = mysqli_query($conn, "SELECT * FROM habitacion where id_hotel = $id_hotel");

        while ($rr = mysqli_fetch_array($ss)) {
            $cont = 1;
        ?>
            <div class="myelement">
                <p class="myfont" style="color:#fff;">TIPO</p>
                <?php echo $rr['tipo']; ?>
            </div>
            <div class="myelement">
                <p class="myfont" style="color:#fff;">PRECIO P/NOCHE</p>
                <?php echo $rr['precio'] . " BOB"; ?>
            </div>
            <div class="myelement1" style="width: 300px;">
                <?php echo $rr['descripcion']; ?>
                <br><br>
                <i class="bi bi-people-fill"> <?php echo  $rr['adultos'] . " adultos y " . $rr['ninhos'] . " niños" ?></i>
            </div>
            <div>
                <img style="width: 400px;" src="data:image/*; base64, <?php echo base64_encode($rr['imagen']); ?>">
            </div>
            <div class="mycontainer" style="border:0px; width:100%; height:80px">                
                <button type="submit" class="btn btn-primary"  value="<?php echo $rr['id_habitacion']; ?>" name="reservar">Reservar</button>                
            </div>
            <br><br><br>
        <?php }
        if ($cont == 0) {
            echo "<script> alert('Sin habitaciones'); window.location = 'reservas.php'</script>";
        }
        ?>
    </form>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.esm.js"></script>
    <script src="js/bootstrap.esm.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
    </div>
</body>