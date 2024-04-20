<?php
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

// Verificar si se han enviado datos mediante algún formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se está insertando un conductor
    if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_conductor") {
        // Obtener los datos del formulario
        $cedula = $_POST["cedula"];
        $primer_nombre = $_POST["primer_nombre"];
        $segundo_nombre = $_POST["segundo_nombre"];
        $apellidos = $_POST["apellidos"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $ciudad = $_POST["ciudad"];

        // Query SQL para insertar los datos en la tabla conductores
        $sql = "INSERT INTO conductores (cedula, primer_nombre, segundo_nombre, apellidos, direccion, telefono, ciudad)
                VALUES ('$cedula', '$primer_nombre', '$segundo_nombre', '$apellidos', '$direccion', '$telefono', '$ciudad')";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo "Registro de conductor insertado correctamente";
        } else {
            echo "Error al insertar el registro: " . $conn->error;
        }
    }

    // Verificar si se está insertando un propietario
    if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_propietario") {
        // Obtener los datos del formulario
        $cedula = $_POST["cedula"];
        $primer_nombre = $_POST["primer_nombre"];
        $segundo_nombre = $_POST["segundo_nombre"];
        $apellidos = $_POST["apellidos"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $ciudad = $_POST["ciudad"];

        // Query SQL para insertar los datos en la tabla propietarios
        $sql = "INSERT INTO propietarios (cedula, primer_nombre, segundo_nombre, apellidos, direccion, telefono, ciudad)
                VALUES ('$cedula', '$primer_nombre', '$segundo_nombre', '$apellidos', '$direccion', '$telefono', '$ciudad')";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo "Registro de propietario insertado correctamente";
        } else {
            echo "Error al insertar el registro: " . $conn->error;
        }
    }

    // Verificar si se está insertando un vehículo
    if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_vehiculo") {
        // Obtener los datos del formulario
        $placa = $_POST["placa"];
        $color = $_POST["color"];
        $marca = $_POST["marca"];
        $tipo_vehiculo = $_POST["tipo_vehiculo"];
        $id_conductor = $_POST["id_conductor"];
        $id_propietario = $_POST["id_propietario"];

        // Query SQL para insertar los datos en la tabla vehículos
        $sql = "INSERT INTO vehiculos (placa, color, marca, tipo_vehiculo, id_conductor, id_propietario)
                VALUES ('$placa', '$color', '$marca', '$tipo_vehiculo', '$id_conductor', '$id_propietario')";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo "Registro de vehículo insertado correctamente";
        } else {
            echo "Error al insertar el registro: " . $conn->error;
        }
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
