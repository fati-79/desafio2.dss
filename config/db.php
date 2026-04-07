<?php
$conn = new mysqli("localhost", "root", "", "techstore", 3307);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo " ";
?>