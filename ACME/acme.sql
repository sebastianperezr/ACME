-- tabla de conductores
CREATE TABLE conductores (
    id_conductor INT AUTO_INCREMENT PRIMARY KEY,
    cedula VARCHAR(15) UNIQUE,
    primer_nombre VARCHAR(50),
    segundo_nombre VARCHAR(50),
    apellidos VARCHAR(100),
    direccion VARCHAR(255),
    telefono VARCHAR(20),
    ciudad VARCHAR(100)
);

--tabla de propietarios
CREATE TABLE propietarios (
    id_propietario INT AUTO_INCREMENT PRIMARY KEY,
    cedula VARCHAR(15) UNIQUE,
    primer_nombre VARCHAR(50),
    segundo_nombre VARCHAR(50),
    apellidos VARCHAR(100),
    direccion VARCHAR(255),
    telefono VARCHAR(20),
    ciudad VARCHAR(100)
);

--tabla de vehículos
CREATE TABLE vehiculos (
    placa VARCHAR(10) PRIMARY KEY,
    color VARCHAR(50),
    marca VARCHAR(50),
    tipo_vehiculo ENUM('particular', 'publico'),
    id_conductor INT,
    id_propietario INT,
    FOREIGN KEY (id_conductor) REFERENCES conductores(id_conductor),
    FOREIGN KEY (id_propietario) REFERENCES propietarios(id_propietario)
);
