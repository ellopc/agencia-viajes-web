<?php
include '../includes/conexion.php';

$origen = $_GET['origen'];
$destino = $_GET['destino'];
$fecha = $_GET['fecha'];

$sql = "SELECT * FROM VUELO WHERE origen LIKE '%$origen%' AND destino LIKE '%$destino%' AND fecha = '$fecha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Resultados de búsqueda:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "Vuelo: " . $row['origen'] . " a " . $row['destino'] . " el " . $row['fecha'] . " - Precio: $" . $row['precio'] . "<br>";
    }
} else {
    echo "No se encontraron vuelos";
}

$conn->close();
?>
