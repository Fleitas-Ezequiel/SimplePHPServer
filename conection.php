<?php
    require 'vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    $con  = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASSWORD'],$_ENV['DB_NAME']);

    $sql_clientes = "CREATE TABLE IF NOT EXISTS clientes (
        cliente_id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        email VARCHAR(100) UNIQUE NOT NULL,
        telefono VARCHAR(20)
    );";
    mysqli_query($con, $sql_clientes);

    $sql_productos = "CREATE TABLE IF NOT EXISTS productos (
        producto_id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        descripcion TEXT,
        precio DECIMAL(10, 2) NOT NULL
    );";
    mysqli_query($con, $sql_productos);

    $sql_pedidos = "CREATE TABLE IF NOT EXISTS pedidos (
        pedido_id INT AUTO_INCREMENT PRIMARY KEY,
        cliente_id INT,
        fecha DATE NOT NULL,
        total DECIMAL(10, 2) NOT NULL,
        FOREIGN KEY (cliente_id) REFERENCES clientes(cliente_id)
    );";
    mysqli_query($con, $sql_pedidos);

    $crear_clientes = "INSERT INTO clientes (nombre, email, telefono) VALUES
        ('Ezequiel Fleitas', 'ezequiel.fleitas@example.com', '1234567890'),
        ('Ariel Fermani', 'ariel.fermani@example.com', '1234567890'),
        ('Andres Michael', 'andres.michael@example.com', '0987654321');";
    mysqli_query($con, $crear_clientes);
?>