<?php 

session_start();

require '../conexion/conexion.php';

$email = $_POST['email'];

$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE correo = ?');
$stmt->execute([$email]);

$user = $stmt->fetch();

if(!$user){
    session_destroy();
    header("Location: /Prueba/login.php?error=1");
}

$_SESSION['nombre'] = $user['nombres'] . ' ' . $user['apellidos'];
$_SESSION['correo'] = $user['correo'];
$_SESSION['rol'] = $user['fk_id_rol'];
$_SESSION['id'] = $user['id'];

header("Location: ../vistas/imagenes.php");