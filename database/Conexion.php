<?php
require_once __DIR__ . '/../vendor/autoload.php';


use Dotenv\Dotenv;

if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
}

function conexion()
{
    try {
        $host = getenv('DB_HOST');
        $port = getenv('DB_PORT');
        $db   = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $pass = getenv('DB_PASS');

        $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

        $PDO = new PDO($dsn, $user, $pass);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $PDO;
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}
