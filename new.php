<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $conn = mysqli_connect("localhost", "root", "", "ilc");
        if (!$conn) {
            die("No hay conexion: " . mysqli_connect_error());
        }

        if (isset($_REQUEST['guardar'])) {
            $entrada = $_POST['entrada'];
            $salida = $_POST['salida'];
            $nombre = $_POST['nombres'];
            $apellido = $_POST['apellidos'];
            $email = $_POST['email'];
            $id_habitacion = $_POST['guardar'];
            echo "<script> alert('id func = $id_habitacion');</script>";
            $query = "insert into reservas (id_habitacion, nombres, apellidos, email) values ($id_habitacion, $nombre, $apellido, $email)";         
            mysqli_query($conn, $query);

            
            echo "<script> alert('nombre = $nombre');</script>";
            echo "<script> alert('apellido = $apellido');</script>";
            echo "<script> alert('email = $email');</script>";
            echo "<script> alert('id = $id_habitacion');</script>";
            

            if ($entrada > $salida) {
                echo "<script> alert('Por favor revise las fechas introducidas'); 
            window.location = 'habitacion.php';
            </script>";
            } else {
            //       "insert into reservas (id_habitacion, nombres, apellidos, email) values (,,,)"
            $query = "insert into reservas (id_habitacion, nombres, apellidos, email) values ($id_habitacion, $nombre, $apellido, $email)";         

            if (mysqli_query($conn, $query)) {
                echo "<script> alert('La reserva se realizó con éxito');
                        window.location = 'index.html';
                    </script>";
            } else {
                echo "<script> alert('Error: la reserva no se realizó');
                    window.location = 'reservas.php';
                    </script>";
            }
            }
        }
        ?>
</body>
</html>