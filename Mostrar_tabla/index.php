<?php 

$conexion = mysqli_connect('localhost', 'root','', 'agenciaautomoviles2');

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes de una agencia de automoviles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="tabla_vehiculo">
        <h1>Tabla de Vehículos</h1>
        <h2>(Agencia de Automóviles)</h2>
        <table>
            <tr>
                <td>Codigo Vehículo</td>
                <td>Descripción</td>
                <td>Patente</td>
                <td>Modelo</td>
                <td>Kilometraje</td>
                <td>Fecha de Ingreso</td>
                <td>Estado</td>
                <td>Precio</td>
                <td>Código Rubro</td>
            </tr>

            <?php

            $sql = "SELECT * from vehiculos";
            $result = mysqli_query($conexion,$sql);

            while($mostrar = mysqli_fetch_array($result)){

            ?>
            <tr>
                <td class="tr1"><?php echo $mostrar ['cod_vehiculo']?></td>
                <td><?php echo $mostrar ['desc_vehiculo']?></td>
                <td class="tr1"><?php echo $mostrar ['patente_vehiculo']?></td>
                <td><?php echo $mostrar ['modelo_vehiculo']?></td>
                <td class="tr1"><?php echo $mostrar ['km_vehiculo']?></td>
                <td><?php echo $mostrar ['fec_ing_vehiculo']?></td>
                <td class="tr1"><?php echo $mostrar ['estado_vehiculo']?></td>
                <td><?php echo $mostrar ['precio_vehiculo']?></td>
                <td class="tr1"><?php echo $mostrar ['cod_rubro']?></td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </section>
</body>
</html>