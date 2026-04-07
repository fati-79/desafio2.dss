<?php
include("../config/db.php");

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

// Validación básica
if (empty($nombre) || empty($precio) || empty($stock)) {
    echo "Todos los campos son obligatorios";
    exit();
}

$conn->query("INSERT INTO productos(nombre, precio, stock)
VALUES('$nombre','$precio','$stock')");

header("Location: ../views/productos.php");

if (empty($nombre) || empty($precio) || empty($stock)) {
    echo "Todos los campos son obligatorios";
    exit();
}

if ($precio < 0 || $stock < 0) {
    echo "Valores inválidos";
    exit();
}

?>