<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Enlace al CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Vista de Vehículo</title>
</head>
<body>
    <div class="container">
        <h2>Consulta de Vehículo</h2>
        <form action="consulta_vehiculo.php" method="POST">
            <label for="placa">Ingrese la Placa del Vehículo:</label>
            <input type="text" name="placa" required>
            <input type="submit" value="Consultar">
        </form>
    </div>

    <?php
    // Verificar si se han enviado datos mediante el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Establecer la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "acme";

        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Obtener la placa ingresada por el usuario
        $placa = $_POST["placa"];

        // Consultar la información del vehículo en la base de datos
        $sql = "SELECT v.placa, v.marca, CONCAT(c.primer_nombre, ' ', c.segundo_nombre, ' ', c.apellidos) AS nombre_conductor, CONCAT(p.primer_nombre, ' ', p.segundo_nombre, ' ', p.apellidos) AS nombre_propietario
                FROM vehiculos v
                INNER JOIN conductores c ON v.id_conductor = c.id_conductor
                INNER JOIN propietarios p ON v.id_propietario = p.id_propietario
                WHERE v.placa = '$placa'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="container">';
            // Mostrar la información del vehículo
            while ($row = $result->fetch_assoc()) {
                echo "<h3>Información del Vehículo</h3>";
                echo "<p><strong>Placa:</strong> " . $row["placa"] . "</p>";
                echo "<p><strong>Marca:</strong> " . $row["marca"] . "</p>";
                echo "<p><strong>Nombre del Conductor:</strong> " . $row["nombre_conductor"] . "</p>";
                echo "<p><strong>Nombre del Propietario:</strong> " . $row["nombre_propietario"] . "</p>";
            }
            echo '</div>';
        } else {
            echo '<div class="container">';
            echo "No se encontró ningún vehículo con la placa ingresada.";
            echo '</div>';
        }
        
        // Cerrar la conexión a la base de datos
        $conn->close();
    }
    ?>

    <!-- Botón de regreso utilizando Bootstrap -->
    <div class="container mt-3">
        <a href="index.php" class="btn btn-primary">Regresar</a>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
