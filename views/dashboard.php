<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Bienvenido <?php echo $_SESSION['user']; ?></h2>

        <a class="btn" href="productos.php">Gestionar Productos</a>
    </div>
</div>

</body>
</html>