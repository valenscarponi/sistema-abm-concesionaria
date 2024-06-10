<?php 

$conexion = mysqli_connect('localhost', 'root','', 'agenciaautomoviles2');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altas, Bajas y Modificaciones de Vehículos</title>
    <link rel="stylesheet" href="styles.css">
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
                    <li><a href="/ABM Agencia A/M/index.php">Modificaciones</a></li>
                </ul>
            </nav>
        </header>
        <div class="presentation">
            <h1>Sistema de Altas, Bajas y Modificaciones de Vehículos</h1>
            <h2>Concesionaria Elias Hnos</h2>
        </div>
    </main>
    <section class="list_a">
        <div class="list_a_h3">
            <h3><a href="/ABM Agencia A/A/index.html">Altas</a></h3>
            <h3><a href="/ABM Agencia A/B/index.php">Bajas</a></h3>
            <h3><a href="/ABM Agencia A/M/index.php">Modificaciones</a></h3>
        </div>
    </section>
    <?php 
        include ('./Mostrar_tabla/index.php');
    ?>
</body>
</html>