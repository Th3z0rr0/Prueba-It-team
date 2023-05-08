<?php

include '../conexion/conexion.php';

if (!empty($_GET)) {
    $id = $_GET['id'];


    $stmt = $pdo->prepare("UPDATE usuarios SET estado = 0 WHERE id = :id");

    $stmt->bindParam(':id', $id);

    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header('Location: ../vistas/usuarios.php?alert=1');
    } else {
        header('Location: ../vistas/usuarios.php?alert=2');
    }
}
