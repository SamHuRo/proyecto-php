<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-Adicionar los estilos->
    <link rel="stylesheet" href="style.css">
    <title>Sistema de notas</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>

    <form action="Usuarios/Controladores/login.php" method="post">
        <label for="UsuarioLabel">Usuario:</label>
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"><br><br>

        <label for="ContrasenaLabel">Contraseña:</label>
        <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña"><br><br>
    </form>
</body>
</html>