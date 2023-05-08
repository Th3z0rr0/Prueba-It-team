<?php

include '../conexion/conexion.php';

if(!empty($_POST)){
    $id = $_POST['id'];

    $nombre = $_POST['nombre'];

    $stmt = $pdo->prepare("UPDATE rol SET nombre = :nombre WHERE id = :id");

    $stmt->bindParam(':id',$id);

    $stmt->bindParam(':nombre', $nombre);

    $stmt->execute();

    if($stmt->rowCount() > 0){
        header('Location: ../vistas/roles/editarRol.php?id='.$id.'&alert=1');
    }else{
        header('Location: ../vistas/roles/editarRol.php?id='.$id.'&alert=2');
    }
}