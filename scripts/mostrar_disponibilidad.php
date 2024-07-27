<?php
include '../includes/conexion.php';

// Consulta para mostrar la disponibilidad de servicios turísticos
$sql = "SELECT h.nombre, COUNT(r.id_reserva) AS num_reservas
        FROM RESERVA r
        JOIN HOTEL h ON r.id_hotel = h.id_hotel
        GROUP BY h.nombre
        HAVING COUNT(r.id_reserva) > 2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Hotel: ". $row["nombre"]. " - Número de reservas: ". $row["num_reservas"]. "<br>";
    }
} else {
    echo "No hay resultados";
}

$conn->close();
?>
