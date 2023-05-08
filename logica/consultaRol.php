<?php

include '../conexion/conexion.php';

$consulta = $pdo->query('SELECT * FROM rol WHERE estado = 1');
$roles = $consulta->fetchAll(PDO::FETCH_ASSOC);


