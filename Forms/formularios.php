<!-- Formulario para registrar vuelos -->
<form action="scripts/procesar_vuelo.php" method="post">
    <label for="origen">Origen:</label>
    <input type="text" id="origen" name="origen" required><br><br>
    <label for="destino">Destino:</label>
    <input type="text" id="destino" name="destino" required><br><br>
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required><br><br>
    <label for="plazas_disponibles">Plazas disponibles:</label>
    <input type="number" id="plazas_disponibles" name="plazas_disponibles" required><br><br>
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" required><br><br>
    <input type="submit" value="Registrar vuelo"><br><br>
</form>

<!-- Formulario para registrar hoteles -->
<form action="scripts/procesar_hotel.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>
    <label for="ubicacion">Ubicación:</label>
    <input type="text" id="ubicacion" name="ubicacion" required><br><br>
    <label for="habitaciones_disponibles">Habitaciones disponibles:</label>
    <input type="number" id="habitaciones_disponibles" name="habitaciones_disponibles" required><br><br>
    <label for="tarifa_noche">Tarifa por noche:</label>
    <input type="number" id="tarifa_noche" name="tarifa_noche" required><br><br>
    <input type="submit" value="Registrar hotel"><br><br>
</form>
