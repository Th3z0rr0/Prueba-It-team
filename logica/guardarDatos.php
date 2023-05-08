<?php

include '../conexion/conexion.php';

if(!empty($_POST)){
    $sql = "INSERT INTO usuarios (tipoDocumento,documento,nombres,apellidos,edad,correo,fk_id_rol) VALUES (:tipoDocumento,:documento,:nombres,:apellidos,:edad,:correo,:rol)";

     $stmt = $pdo->prepare($sql);

     $tipoDocumento = $_POST['documento'];
     $numeroDocumento = $_POST['numero'];
     $nombres = $_POST['nombres'];
     $apellidos = $_POST['apellidos'];
     $edad = $_POST['edad'];
     $correo = $_POST['correo'];
     $rol = $_POST['rol'];

     $stmt->bindParam(':tipoDocumento',$tipoDocumento);
     $stmt->bindParam(':documento',$numeroDocumento);
     $stmt->bindParam(':nombres',$nombres);
     $stmt->bindParam(':apellidos',$apellidos);
     $stmt->bindParam(':edad',$edad);
     $stmt->bindParam(':correo',$correo);
     $stmt->bindParam(':rol',$rol);

     $stmt->execute();

     header('Location: ../vistas/usuarios/crearUsuario.php?alert=1');
}