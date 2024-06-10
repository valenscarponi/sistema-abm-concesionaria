<?php 

$conexion = mysqli_connect('localhost', 'root','', 'agenciaautomoviles2');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bajas de Agencia de Automóviles</title>
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
                    <li><a href="/ABM Agencia A/M/index.php">Modificaciones</a></li>
                </ul>
            </nav>
            <a href="/ABM Agencia A/MAIN/index.php" class="btn"><button>Inicio</button></a>
        </header>
    </main>
    <h1>Formulario de Bajas de Agencia de Automóviles</h1>
    <p>Ingrese el código de vehículo para borrar un dato de la tabla:</p>
    <form class="caja" action="ingreso.php" method="post">
        <div class="box-form">
            <label for="">Ingrese el código del vehículo: </label> 
            <input type="number" name="codigo_vehiculo" required>
        </div>

        <div class="box-form">
            <input type="submit" name="Subir">
        </div>
    </form>
    <?php 
        include ('./Mostrar_tabla/index.php');
    ?>
</body>
</html>