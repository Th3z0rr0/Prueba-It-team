<?php
    require '../logica/validaSesion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de imagenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="../recursos/css/app.css" rel="stylesheet">
</head>

<body>
    <?php require 'menu.php' ?>
    <div class="container">
        <div class="row mb-3">
            <div class="shadow-lg rounded bg-body-tertiary" id="formulario">
                <div class="row mt-3">
                    <div class="col-md-2">
                        <label for="busqueda">Ingresar Texto:</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="busqueda" name="busqueda">
                    </div>
                    <div class="col-md-1">
                        <a href="#" class="btn btn-success mb-3" id="buscar">Buscar</a>
                    </div>
                    <div class="col-md-1">
                        <label for="busqueda">Categorias:</label>
                    </div>
                    <div class="col-md-3">
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="Seleccione">Seleccione..</option>
                            <option value="science">Science</option>
                            <option value="education">Education</option>
                            <option value="people">People</option>
                            <option value="feelings">Feelings</option>
                            <option value="computer">Computer</option>
                            <option value="buildings">Buildings</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" id="imagenes">

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Información de la imagen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="info">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../recursos/js/app.js"></script>
</body>

</html>