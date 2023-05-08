<?php
require '../logica/validaSesion.php';
require '../logica/consultaRol.php';
require '../conexion/conexion.php';

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
    <title>Gestión de Roles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="../recursos/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <?php require 'menu.php' ?>

    <div class="container">
        <h3 class="text-center">Gestión de Roles</h3>

        <?php if ($alert == 1) { ?>

            <div class="alert alert-success " role="alert">
                Usuario Eliminado Correctamente
            </div>

        <?php } elseif ($alert == 2) { ?>

            <div class="alert alert-danger " role="alert">
                Error al eliminar el usuario
            </div>

        <?php } ?>


        <a href="roles/crearRol.php" id="crear" class="btn btn-success mb-2">Crear Nuevo Rol</a>
        <table class="table table-hover border">
            <thead class="bg-dark text-white">
                <tr>
                    <th>#Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($roles as $rol) { ?>
                    <tr>
                        <th><?php echo $rol['id'] ?></th>
                        <th><?php echo $rol['nombre'] ?></th>
                        <th class="text-center">
                            <a href="<?php echo 'roles/editarRol.php?id=' . $rol['id'] ?>" class="btn btn-warning"><span class="material-symbols-outlined">edit</span></a>
                            <?php if ($rol['id'] != 1) { ?>
                                <a href="<?php echo '../logica/eliminarRol.php?id=' . $rol['id'] ?>" class="btn btn-danger"><span class="material-symbols-outlined">delete</span></a>
                            <?php } ?>
                        </th>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../recursos/js/roles.js"></script>
</body>

</html>