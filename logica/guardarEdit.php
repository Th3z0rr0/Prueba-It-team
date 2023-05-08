<?php

include '../conexion/conexion.php';

if(!empty($_POST)){
    $id = $_POST['id'];

    $tipoDocumento = $_POST['documento'];
    $numeroDocumento = $_POST['numero'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $rol = $_POST['rol'];

    $stmt = $pdo->prepare("UPDATE usuarios SET tipoDocumento = :tipoDocumento, documento = :documento, nombres = :nombres, apellidos = :apellidos, edad = :edad, correo = :correo, fk_id_rol = :rol WHERE id = :id");

    $stmt->bindParam(':id',$id);

    $stmt->bindParam(':tipoDocumento',$tipoDocumento);
    $stmt->bindParam(':documento', $numeroDocumento);
    $stmt->bindParam(':nombres', $nombres);
    $stmt->bindParam(':apellidos', $apellidos);
    $stmt->bindParam(':edad', $edad);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':rol', $rol);

    $stmt->execute();

    if($stmt->rowCount() > 0){
        header('Location: ../vistas/usuarios/editarUsuario.php?id='.$id.'&alert=1');
    }else{
        header('Location: ../vistas/usuarios/editarUsuario.php?id='.$id.'&alert=2');
    }
}