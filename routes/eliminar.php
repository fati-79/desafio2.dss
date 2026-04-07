<?php
include("../config/db.php");

$id = $_GET['id'];

$conn->query("DELETE FROM productos WHERE id=$id");

header("Location: ../views/productos.php");
?>