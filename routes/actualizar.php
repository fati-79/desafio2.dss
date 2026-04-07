<?php
include("../config/db.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$conn->query("UPDATE productos SET 
nombre='$nombre',
precio='$precio',
stock='$stock'
WHERE id=$id");

header("Location: ../views/productos.php");
?>