<?php 

$conexion = mysqli_connect('localhost', 'root','', 'agenciaautomoviles2');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altas - Resultado</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <main>
        <header class="header">
            <div class="logo">
                <img src="./Imagenes/Black and Brown Retro Automotive Logo.png" alt="Logo">
            </div>
            <nav>
                <ul class="nav_links">
                    <li><a href="/ABM Agencia A/B/index.php">Bajas</a></li>
                    <li><a href="/ABM Agencia A/M/index.php">Modificaciones</a></li>
                </ul>
            </nav>
            <a href="/ABM Agencia A/MAIN/index.php" class="btn"><button>Inicio</button></a>
        </header>
    </main>

    <?php

    $descripcion = $_POST['descripcion'];
    $patente = $_POST['patente'];
    $modelo = $_POST['modelo'];
    $kilometros = $_POST['kilometros'];
    $fecha = isset($_POST['trip-start']) ? $_POST['trip-start'] : null;
    $estado = $_POST['estado'];
    $precio = $_POST['precio'];
    $codigo = $_POST['codigo'];

    $conexion = mysqli_connect("localhost","root","","agenciaautomoviles2");

    $consulta= "INSERT INTO vehiculos(desc_vehiculo,patente_vehiculo,modelo_vehiculo,km_vehiculo,fec_ing_vehiculo,estado_vehiculo,precio_vehiculo,cod_rubro) VALUES ('$descripcion','$patente','$modelo','$kilometros','$fecha',
    '$estado','$precio','$codigo')";
    $resultado = mysqli_query($conexion,$consulta);

    if ($resultado) {
        echo "<h1>Datos agregados correctamente</h1>";
    } 
    else{
        echo "<h1>Error al cargar los datos</h1>";
    };
    mysqli_close($conexion);
    ?>

<!-- Mostrar links -->
    <section class="links">
        <p><a href="/ABM Agencia A/A/index.html">Volver a ingresar otro dato</a></p>
        <p><a href="/ABM Agencia A/MAIN/index.php">Volver a inicio</a></p>
    </section>

    <?php 
    include ('./Mostrar_tabla/index.php');
    ?>
</body>
</html>