<?php
require_once('../database/Conexion.php');
header('Content-Type: application/json');
try {
    $conexion_SQL = conexion();
    $query = "SELECT mes, monto FROM ventas ORDER BY id ASC";
    $resultado = $conexion_SQL->query($query);
    $datos = [];
    foreach ($resultado as $fila) {
        $datos[] = $fila;
    }
    echo json_encode($datos);
    $conexion_SQL = null;
} catch (\Throwable $th) {
    echo "error al obtener datos: " . $th->getMessage();
}
