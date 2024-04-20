<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuración del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace al archivo de estilos -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Registro de Vehículos</title>
</head>
<body>

    <div class="container">
    <!-- Formulario de registro de vehículos -->
    <h2>Registro de Vehiculos</h2>
        <form action="insertar.php" method="POST">
            <!-- Campo oculto para indicar la acción -->
            <input type="hidden" name="accion" value="insertar_vehiculo">
            <!-- Campos del formulario -->
            <label for="placa">Placa:</label>
            <input type="text" name="placa" maxlength="10" required><br>
            <label for="color">Color:</label>
            <input type="text" name="color" maxlength="50" required><br>
            <label for="marca">Marca:</label>
            <input type="text" name="marca" maxlength="50" required><br>
            <label for="tipo_vehiculo">Tipo de Vehículo:</label>
            <select name="tipo_vehiculo" required>
                <option value="particular">Particular</option>
                <option value="publico">Público</option>
            </select><br>
            <label for="id_conductor">ID del Conductor:</label>
            <input type="text" name="id_conductor" required><br>
            <label for="id_propietario">ID del Propietario:</label>
            <input type="text" name="id_propietario" required><br>
            <!-- Botón de enviar -->
            <input type="submit" value="Guardar">
        </form>
    </div>

</body>
</html>
