
<?php

require_once 'deploy/db_config.php';

try {
    // Crear una conexión
    $conn = new PDO("mysql:host=".MYSQL_HOST, MYSQL_USER, MYSQL_PASS);
    // Establecer el modo de error en excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Crear la base de datos si no existe
    $sql = "CREATE DATABASE IF NOT EXISTS ".MYSQL_DBNAME;
    $conn->exec($sql);

    // Seleccionar la base de datos recién creada
    $conn->exec("USE ".MYSQL_DBNAME);

    $sql = file_get_contents('base_de_datos.sql');
    $conn->exec($sql);

    echo "Base de datos y tablas creadas exitosamente";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>