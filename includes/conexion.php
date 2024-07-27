<?php
// Configuración de la conexión
$host = 'localhost';
$username = 'root';
$password = '123123';
$dbname = 'AGENCIA';

// Establecer conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: ". $conn->connect_error);
}

// Conexión establecida con éxito
echo "Conexión establecida con éxito";
?>
