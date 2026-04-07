<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Agregar Producto</h2>

        <form method="POST" action="../routes/guardar.php">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="number" name="precio" placeholder="Precio" required>
            <input type="number" name="stock" placeholder="Stock" required>
            <button>Guardar</button>
        </form>

        <a class="btn" href="productos.php">Volver</a>
    </div>
</div>

</body>
</html>