<?php
include '../includes/conexion.php';

// Recoger datos del formulario
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$plazas_disponibles = $_POST['plazas_disponibles'];
$precio = $_POST['precio'];

// Insertar datos en la tabla VUELO
$sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) VALUES ('$origen', '$destino', '$fecha', $plazas_disponibles, $precio)";
if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php?msg=Vuelo registrado con éxito");
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();
?>
