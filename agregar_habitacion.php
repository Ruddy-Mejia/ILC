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


    <?php


    $conn = mysqli_connect("localhost", "root", "", "ilc");
    if (!$conn) {
        die("No hay conexion: " . mysqli_connect_error());
    }
    if (isset($_REQUEST['guardar'])) {
        if (isset($_FILES['imagen']['name'])) {
            $imagenSubida = fopen($_FILES['imagen']['tmp_name'], 'r+');
            $nombreArchivo = $_FILES['imagen']['name'];
            $tamanoArchivo = $_FILES['imagen']['size'];
            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
            $binariosImagen = mysqli_escape_string($conn, $binariosImagen);

            $hotel = $_POST['hoteles'];
            $precio = $_POST['precio'];
            $tipo = $_POST['tipo'];
            $desc = $_POST['desc'];
            $adultos = $_POST['adultos'];
            $ninhos = $_POST['ninhos'];

            $query = "insert into habitacion (id_hotel, precio, tipo, descripcion, imagen, adultos,ninhos) values ('$hotel','$precio', '$tipo','$desc','$binariosImagen', $adultos, $ninhos)";
            $res = mysqli_query($conn, $query);
            if ($res) {
    ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="close" , data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    Registro insertado!
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="close" , data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    Error <?php echo mysqli_error($conn); ?>
                </div>
    <?php
            }
        }
    }
    ?>

    <form name="form-worksd" method="post" style="width: 600px; margin: auto;" enctype="multipart/form-data">
        <div>
            <label class="myfont">HOTEL</label>
            <select class="form-select" name="hoteles" id="hoteles">
                <?php
                $query = "select nombre,id_hotel from hotel";
                $ss = mysqli_query($conn, $query);
                while ($rr = mysqli_fetch_array($ss)) {
                ?>
                    <option value="<?php echo $rr['id_hotel'] ?>"><?php echo $rr['nombre'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <br>
        <div>
            <label class="myfont">PRECIO P/NOCHE</label>
            <input type="text" class="form-control" name="precio">
        </div>
        <br>
        <div>
            <label class="myfont">TIPO</label>
            <input type="text" class="form-control" name="tipo">
        </div>
        <br>
        <div>
            <label class="myfont">CAPACIDAD (ADULTOS)</label>
            <input type="text" class="form-control" name="adultos">
        </div>
        <br>
        <div>
            <label class="myfont">CAPACIDAD (NIÑOS)</label>
            <input type="text" class="form-control" name="ninhos">
        </div>
        <br>
        <div>
            <label for="exampleFormControlTextarea1" class="myfont">DESCRIPCIÓN</label>
            <textarea name="desc" class="form-control" rows="7"></textarea>
        </div>
        <label class="myfont">IMAGEN</label>
        <div>
            <input type="file" class="form-control-file myfont" name="imagen" id="imagen" accept="image/*">
        </div>
        <br>
        <div style="width: 600px; height: 300px;" class="form-group" class="boton">
            <button type="submit" class="btn btn-primary myfont" style="color: white;" name="guardar">Guardar</button>
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