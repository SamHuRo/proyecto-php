<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-Adicionar los estilos->
    <link rel="stylesheet" href="/Styles/style_login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sistema de notas</title>
</head>
<body>

    <div class="wrapper">
        
        <form action="Usuarios/Controladores/login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input class="controls" type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario">
                <i class='bx bxs-user-circle'></i>
            </div>

            <div class="input-box">
                <input class="controls" type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña">
                <i class='bx bxs-lock-alt' ></i>
            </div>
            
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>

            <input class="btn" type="submit" value="Iniciar Sesión">

            <div class="register-link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
        </form>
    </div>

</body>
</html>