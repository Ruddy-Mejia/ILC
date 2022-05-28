<?php
$conn = mysqli_connect("localhost", "root", "", "ilc");
if (!$conn) {
    die("No hay conexion: " . mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$prop = $_POST['propuesta'];
$imagen = $_POST['imagen'];


$insertar = "insert into hotel(nombre, ubicacion, descripcion) values ('$nombre','$ubicacion','$prop')";
$query = mysqli_query($conn,$insertar);

if($query){
    echo "<script> alert('correcto'); </script>";
}else{
    echo "<script> alert('incorrecto'); </script>";
}

?>
