<?php

include '../conexion/conexion.php';

if(!empty($_POST)){
    $sql = "INSERT INTO rol (nombre) VALUES (:nombre)";

     $stmt = $pdo->prepare($sql);

     $nombre = $_POST['nombre'];
     $stmt->bindParam(':nombre',$nombre);

     $stmt->execute();

     header('Location: ../vistas/roles/crearRol.php?alert=1');
}