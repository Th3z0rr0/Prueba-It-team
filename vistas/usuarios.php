<?php
require '../logica/validaSesion.php';
require '../logica/consultasUsuarios.php';
require '../conexion/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="../recursos/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <?php require 'menu.php' ?>

    <div class="container">
        <h3 class="text-center">Gestión de Usuarios</h3>


        <a href="#" id="crear" class="btn btn-success mb-2">Crear Nuevo Usuario</a>
        <table class="table table-hover border">
            <thead class="bg-dark text-white">
                <tr>
                    <th>#Id</th>
                    <th>Tipo de Documento</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($usuarios as $usuario) { ?>

                    <th><?php echo $usuario['id'] ?></th>
                    <th><?php echo $usuario['tipoDocumento'] ?></th>
                    <th><?php echo $usuario['documento'] ?></th>
                    <th><?php echo $usuario['nombres'] . ' ' . $usuario['apellidos'] ?></th>
                    <th><?php echo $usuario['edad'] ?></th>
                    <th><?php

                        $stmt = $pdo->prepare('SELECT nombre FROM rol WHERE id = :id');

                        $stmt->bindParam(':id', $usuario['fk_id_rol']);

                        $stmt->execute();

                        $rol = $stmt->fetch();

                        if ($rol) {
                            echo $rol['nombre'];
                        }

                        ?></th>
                    <th class="text-center">
                        <a href="" class="btn btn-warning"><span class="material-symbols-outlined">edit</span></a>
                        <a href="" class="btn btn-danger"><span class="material-symbols-outlined">delete</span></a>
                    </th>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>