<?php
require '../../logica/validaSesion.php';

$alert = '';

if (!empty($_GET['alert'])) {
    $alert = $_GET['alert'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link href="../../recursos/css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>

    <div class="bg-dark w-100 p-3 text-center mb-4">
        <?php if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) { ?>
            <a href="../imagenes.php" class="text-decoration-none text-white px-2">Catálogo</a>
        <?php }
        if ($_SESSION['rol'] == 1) {
        ?>
            <a href="../usuarios.php" class="text-decoration-none text-white px-2">Gestión de Usuarios</a>
            <a href="../rol.php" class="text-decoration-none text-white px-2">Gestión de Roles</a>
        <?php
        }
        ?>
        <a href="../../logica/cerrarSesion.php" class="text-decoration-none text-white px-2">Cerrar Sesión</a>

    </div>
    <div class="container">
        <h3 class="text-center">Crear Nuevo Usuario</h3>

        <?php if ($alert == 1) { ?>

            <div class="alert alert-success " role="alert">
                Rol Creado Correctamente
            </div>

        <?php } ?>

        <form action="../../logica/guardarDatosRol.php" id="formU" class="rounded shadow-lg" method="POST">

            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control mb-2" name="nombre" required>

            <button type="submit" class="btn btn-success mt-2 w-100">Guardar</button>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../recursos/js/usuarios.js"></script>
</body>

</html>