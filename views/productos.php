<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

include("../config/db.php");
$result = $conn->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Productos</h2>

        <a class="btn" href="crear.php"> Agregar</a>

        <table>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>

            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['nombre'] ?></td>
                <td><?= $row['precio'] ?></td>
                <td><?= $row['stock'] ?></td>
                <td>
                    <a class="btn" href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                    <a class="btn btn-danger" href="../routes/eliminar.php?id=<?= $row['id'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>