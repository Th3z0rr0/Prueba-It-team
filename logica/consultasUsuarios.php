<?php

include '../conexion/conexion.php';

$consulta = $pdo->query('SELECT * FROM usuarios WHERE estado = 1');
$usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);


