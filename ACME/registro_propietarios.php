<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Registro de Propietarios</title>

</head>
<body>
    
<div class="container">
    <h2>Registro de Propietarios</h2>
    <form action="insertar.php" method="POST">
        <input type="hidden" name="accion" value="insertar_propietario">
        <label for="cedula">Cédula:</label>
        <input type="text" name="cedula" required autocomplete="off"><br>
        <label for="primer_nombre">Primer Nombre:</label>
        <input type="text" name="primer_nombre" required autocomplete="off"><br>
        <label for="segundo_nombre">Segundo Nombre:</label>
        <input type="text" name="segundo_nombre" autocomplete="off"><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required autocomplete="off"><br>
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required autocomplete="off"><br>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required autocomplete="off"><br>
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" required autocomplete="off"><br>
        <input type="submit" value="Guardar">
    </form>
</div>


        <!-- Botón de regreso-->
    <div class="container mt-3">
        <a href="index.php" class="btn btn-primary">Regresar</a>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>