<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

include("../config/db.php");
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM productos WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Editar Producto</h2>

        <form method="POST" action="../routes/actualizar.php">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <input type="text" name="nombre" value="<?= $data['nombre'] ?>">
            <input type="number" name="precio" value="<?= $data['precio'] ?>">
            <input type="number" name="stock" value="<?= $data['stock'] ?>">
            <button>Actualizar</button>
        </form>

        <a class="btn" href="productos.php">Volver</a>
    </div>
</div>

</body>
</html>