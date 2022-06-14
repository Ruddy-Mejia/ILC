<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
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
    <style>
        .myfont {
            color: #fff;
            font-weight: bolder;
            font-family: 'PT Sans', sans-serif;
        }

        .mycontainer {
            background: #212f3d;
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

<div style="background:url(images/art2.png) no-repeat fixed 50%">
    <form method="post" class="mycontainer">
        <label class="myfont">Seleccione un lugar</label>
        <select class="form-select" name="imagen" id="imagen" style="width: 400px;">
            <option value="0">Inicio</option>
            <option value="av-16-de-julio">Av. 16 de Julio</option>
            <option value="saida a Kasani">Salida a Kasani</option>
            <option value="Av-Jauregui">Av. Jauregui</option>            
            <option value="Mercado-modelo">Mercado Modelo</option>
            <option value="Mirador">Mirador</option>
            <option value="Mirador1">Mirador</option>
            <option value="Plaza">Plaza</option>
            <option value="portada">Portada</option>.
            <option value="Titicaca">Lago Titicaca</option>
            <option value="Titicaca1">Lago Titicaca 1</option>            
            <option value="playa">Playa</option>
            <option value="La-horca-del-inca">La horca del Inca</option>
            <option value="Horca-del-inca1">La horca del Inca 2</option>
            <option value="Basilica-nuestra-seniora-de-copacabana">Basilica Nuestra Señora de Copacabana (exterior)</option>
            <option value="Basilica-nuestra-seniora-de-copacabana-interior">Basilica Nuestra Señora de Copacabana (interior)</option>
            <option value="Iglesia-interior">Basilica Interior</option>
            <option value="Basilica-plaza">Basilica - Plaza</option>
            <option value="Basilica-plaza1">Basilica - Plaza 2</option>
            <option value="Calvario1">Cerro Calvario</option>
            <option value="Calvario2">Cerro Calvario 2</option>
            <option value="Calvario3">Cerro Calvario 3</option>
            <option value="ninio-calvario">Niño Calvario</option>
            <option value="Capilla-Senior-de-la-cruz">Capilla Señor de La Cruz</option>
            <option value="Hostal-Las-Olas">Hostal Las Olas</option>
            <option value="Hotel Gloria">Hotel Gloria</option>
            <option value="Hotel-rosario1">Hotel Rosario</option>
            <option value="Plaza2Feb">Plaza 2 de Febrero</option>
            <option value="Plaza-del-sapo">Plaza del Sapo</option>
            <option value="Puerto">Puerto</option>
            <option value="Puerto1">Puerto 2</option>            
        </select>
        <button class="btn btn-primary" type="submit" name="ir">Ir</button>
    </form>
    <?php    
    if (isset($_REQUEST['ir'])) {
        $num = $_POST['imagen'];
        if($num == 0){
            echo "<script> window.location= 'index.html'</script>";
        }         
        ?>
        <a-scene>            
            <a-sky src="tour/<?php echo $num; ?>.jpg"></a-sky>
        </a-scene>            
        <?php
    }
    ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.esm.js"></script>
    <script src="js/bootstrap.esm.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>