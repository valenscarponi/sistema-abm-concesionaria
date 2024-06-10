<?php 

$conexion = mysqli_connect('localhost', 'root','', 'agenciaautomoviles2');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bajas - Resultado</title>
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
                    <li><a href="/ABM Agencia A/M/index.php">Modificaciones</a></li>
                </ul>
            </nav>
            <a href="/ABM Agencia A/MAIN/index.php" class="btn"><button>Inicio</button></a>
        </header>
    </main>

    <?php

    $codigo = $_POST['codigo_vehiculo'];

    $consulta = "DELETE FROM vehiculos WHERE cod_vehiculo='$codigo'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<h1>Datos eliminados correctamente</h1>";
    } 
    else{
        echo "<h1>Error al borrar los datos</h1>";
    };
    mysqli_close($conexion);
    ?>

<!-- Mostrar links -->
    <section class="links">
        <p><a href="/ABM Agencia A/A/index.html">Volver a borrar otro dato</a></p>
        <p><a href="/ABM Agencia A/MAIN/index.php">Volver a inicio</a></p>
    </section>

    <?php 
    include ('./Mostrar_tabla/index.php');
    ?>
</body>
</html>