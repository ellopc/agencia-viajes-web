<?php
include '../includes/conexion.php';

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$habitaciones_disponibles = $_POST['habitaciones_disponibles'];
$tarifa_noche = $_POST['tarifa_noche'];

// Insertar datos en la tabla HOTEL
$sql = "INSERT INTO HOTEL (nombre, ubicacion, habitaciones_disponibles, tarifa_noche) VALUES ('$nombre', '$ubicacion', $habitaciones_disponibles, $tarifa_noche)";
if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php?msg=Hotel registrado con éxito");
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();
?>
