<?php
$fecha = date("d/m/Y");
$edad =27;
$nombre ="Nahuel Rodriguez";
$aPeliculas = array ("Rocky Iv", "Terminator", "La Era de Hielo");
echo $nombre;
echo $aPeliculas[0];
?>
<?php
$miArray = array();
$miArray[0] = "Hola";
$miArray[1] = "Chau";
echo $miArray[0];
print_r($miArray);
var_dump($miArray);
?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Ficha Personal</title>
</head>

<body>
<div class="container">
    <div class="row">
    <div class="col-12 pt-3 pb-5 text-center">
<h1>Ficha Personal</h1>
</div>
    <div class="row">
        <div class="col-12">
                <table class="table table-hover border">
        <tr>
            <th> Fecha</th>
            <td> <?php echo $fecha; ?></td>
        </tr>
        <tr>
            <th>Nombre y Apellido</th>
            <td><?php echo $nombre; ?></td>         
        </tr>
        <tr>
            <th>Edad</th>
            <td><?php echo $edad; ?></td>
        </tr>
        <tr>
            <th>Pelicula Favorita</th>
            <td><?php echo $aPeliculas[0] . "<br>" . $aPeliculas[1] . "<br>" . $aPeliculas[2] ?></td>
        </tr>
        </div>

        </div>

        </div>
        </div>

</body>

</html>