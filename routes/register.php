<?php
include("../config/db.php");

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Validar si ya existe
$check = $conn->query("SELECT * FROM usuarios WHERE username='$username'");

if ($check->num_rows > 0) {
    echo "El usuario ya existe";
} else {
    $conn->query("INSERT INTO usuarios (username, password) VALUES ('$username', '$password')");
    header("Location: ../views/login.php");
}
?>