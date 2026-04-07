<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card" style="max-width: 400px; margin: auto;">

        <h2>Iniciar Sesión</h2>

        <form method="POST" action="../routes/login.php">
            <input type="text" name="username" placeholder="👤 Usuario" required>
            <input type="password" name="password" placeholder="🔑 Contraseña" required>

            <button type="submit">Ingresar</button>
            <a class="btn" href="register.php">Crear cuenta</a>
        </form>

    </div>
</div>

</body>
</html>