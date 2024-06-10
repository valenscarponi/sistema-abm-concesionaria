<?php 

$conexion = mysqli_connect('localhost', 'root','', 'agenciaautomoviles2');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificaciones de Agencia de Automóviles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header class="header">
            <div class="logo">
                <img src="./Imagenes/Black and Brown Retro Automotive Logo.png" alt="Logo">
            </div>
            <nav>
                <ul class="nav_links">
                    
                    <li><a href="/ABM Agencia A/A/index.html">Altas</a></li>
                    <li><a href="/ABM Agencia A/B/index.php">Bajas</a></li>
                </ul>
            </nav>
            <a href="/ABM Agencia A/MAIN/index.php" class="btn"><button>Inicio</button></a>

            
        </header>
    </main>
    <h1>Formulario de Modificaciones de Agencia de Automóviles</h1>
    <p>Ingrese el código de vehículo para modificar la tabla:</p>
    <p>A continuación, modifique el campo que desea.</p>
    <form class="caja" action="ingreso.php" method="post">
        <div class="box-form">
            <label class="cod_v" for="codigo_vehiculo">Ingrese el código del vehículo: </label> 
            <input class= "cod_v_input" type="number" name="codigo_vehiculo" required>
        </div>

        <div class="box-form">
            <label for="descripcion">Ingrese la descripción del vehículo: </label> 
            <input type="text" name="descripcion">
        </div>

        <div class="box-form">
            <label for="patente">Ingrese la patente del vehículo: </label>
            <input type="text" name="patente">
        </div>

        <div class="box-form">
            <label for="modelo">Ingrese el modelo: </label>
            <input type="text" name="modelo">
        </div>

        <div class="box-form">
            <label for="kilometros">Kilometraje del vehículo: </label>
            <input type="text" name="kilometros">
        </div>

        <div class="box-form">
            <label for="trip-start">Fecha de ingreso: </label>
            <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2030-12-31" />
        </div>

        <div class="box-form">
            <label for="estado">Estado del vehículo: </label>
            <input type="text" name="estado">
        </div>

        <div class="box-form">
            <label for="precio">Precio del vehículo: </label>
            <input type="text" name="precio">
        </div>

        <div class="box-form">
            <label for="codigo">Código de rubro: </label>
            <input type="text" name="codigo">
        </div>

        <div class="box-form">
            <input type="submit" name="Subir">
        </div>
    <?php 
        include ('./Mostrar_tabla/index.php');
    ?>
</body>
</html>