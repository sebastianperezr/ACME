<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Estilos Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <div class="container">
        <h2>Bienvenido a ACME, indique a continuación qué acción desea realizar:</h2>
        <br>
        <!-- Botones para realizar diferentes acciones -->
        <button type="button" onclick="window.location.href='registro_propietarios.php'" class="btn btn-primary btn-block">Registrar Propietario</button>
        <button type="button" onclick="window.location.href='registro_conductores.php'" class="btn btn-primary btn-block">Registrar Conductor</button>
        <button type="button" onclick="window.location.href='registro_vehiculos.php'" class="btn btn-primary btn-block">Registrar Vehículo</button>
        <button type="button" onclick="window.location.href='consulta_vehiculo.php'" class="btn btn-primary btn-block">Consultar Vehículo</button>
    </div> <!-- Fin del contenedor -->

    <!-- Scripts de Bootstrap y jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>