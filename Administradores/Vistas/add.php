<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Styles/style_table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
     
    <div class="conteiner">
        <div>
            <h1>Registrar Administrador</h1>
        </div> <br><br>
        <div>
            <form action="../Controladores/add.php" method="post">
                Nombre <br>
                <input type="text" name="Nombre" require="" autocapitalize="off" placeholder="Nombre"> <br><br>

                Apellido <br>
                <input type="text" name="Apellido" require="" autocapitalize="off" placeholder="Apellido"> <br><br>

                Usuario <br>
                <input type="text" name="Usuario" require="" autocapitalize="off" placeholder="Usuario"> <br><br>

                Password <br>
                <input type="password" name="Password" require="" autocapitalize="off" placeholder="Password"> <br><br>

                <input type="submit" value="Registrar Administrador"> <br><br>
            </form>
        </div>
    </div>

</body>
</html>