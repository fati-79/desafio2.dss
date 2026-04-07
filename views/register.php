<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card" style="max-width: 400px; margin: auto;">

        <h2> Crear Cuenta</h2>

        <form method="POST" action="../routes/register.php">
            <input type="text" name="username" placeholder="👤 Usuario" required>
            <input type="password" name="password" placeholder="🔑 Contraseña" required>

            <button type="submit">Registrarse</button>
        </form>

        <a class="btn" href="login.php">Ya tengo cuenta</a>

    </div>
</div>

</body>
</html>