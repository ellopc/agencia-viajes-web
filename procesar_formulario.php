<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombreHotel = $_POST["nombreHotel"];
  $ciudad = $_POST["ciudad"];
  $pais = $_POST["pais"];
  $fechaViaje = $_POST["fechaViaje"];
  $duracionViaje = $_POST["duracionViaje"];

  $filtro = new FiltroInteractivo($nombreHotel, $ciudad, $pais, $fechaViaje, $duracionViaje);
  $resultados = $filtro->buscarDestino();

  // Mostrar resultados
  foreach ($resultados as $resultado) {
    echo "<p>Nombre del hotel: " . $resultado->getNombreHotel() . "</p>";
    echo "<p>Ciudad: " . $resultado->getCiudad() . "</p>";
    echo "<p>País: " . $resultado->getPais() . "</p>";
    echo "<p>Fecha de viaje: " . $resultado->getFechaViaje(). "</p>";
    echo "<p>Duración del viaje: ". $resultado->getDuracionViaje(). "</p>";
  }
}