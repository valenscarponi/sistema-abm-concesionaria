<?php 

$conexion = mysqli_connect('localhost', 'root','', 'agenciaautomoviles2');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificaciones - Resultado</title>
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
                    <li><a href="/ABM Agencia A/A/index.html">Altas</a></li>
                    <li><a href="/ABM Agencia A/B/index.php">Bajas</a></li>
                </ul>
            </nav>
            <a href="/ABM Agencia A/MAIN/index.php" class="btn"><button>Inicio</button></a>
        </header>
    </main>

    <?php

    $codigo = $_POST['codigo_vehiculo'];
    $descripcion = $_POST['descripcion'];
    $patente = $_POST['patente'];
    $modelo = $_POST['modelo'];
    $kilometros = $_POST['kilometros'];
    $fecha = isset($_POST['trip-start']) ? $_POST['trip-start'] : null;
    $estado = $_POST['estado'];
    $precio = $_POST['precio'];
    $rubro = $_POST['codigo'];

    $updateFields = [];
    if (!empty($descripcion)) {
        $updateFields[] = "desc_vehiculo='$descripcion'";
    }
    if (!empty($patente)) {
        $updateFields[] = "patente_vehiculo='$patente'";
    }
    if (!empty($modelo)) {
        $updateFields[] = "modelo_vehiculo='$modelo'";
    }
    if (!empty($kilometros)) {
        $updateFields[] = "km_vehiculo='$kilometros'";
    }
    if (!empty($fecha)) {
        $updateFields[] = "fec_ing_vehiculo='$fecha'";
    }
    if (!empty($estado)) {
        $updateFields[] = "estado_vehiculo='$estado'";
    }
    if (!empty($precio)) {
        $updateFields[] = "precio_vehiculo='$precio'";
    }
    if (!empty($rubro)) {
        $updateFields[] = "cod_rubro='$rubro'";
    }

    $updateQuery = implode(", ", $updateFields);

    $consulta = "UPDATE vehiculos SET $updateQuery WHERE cod_vehiculo='$codigo'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<h1>Datos Modificados correctamente</h1>";
    } 
    else{
        echo "<h1>Error al modificar los datos</h1>";
    };
    mysqli_close($conexion);
    ?>

<!-- Mostrar links -->
    <section class="links">
        <p><a href="/ABM Agencia A/A/index.html">Volver a modificar otro dato</a></p>
        <p><a href="/ABM Agencia A/MAIN/index.php">Volver a inicio</a></p>
    </section>

    <?php 
    include ('./Mostrar_tabla/index.php');
    ?>
</body>
</html>