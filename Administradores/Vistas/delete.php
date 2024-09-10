<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Eliminar Administrador</h1>

    <form action="../Controladores/delete.php" method="post">
        <input type="hidden" name="Id" value=""> <br><br>

        <p>¿Estás seguro de eliminar este Administrador?</p>

        <input type="submit" value="Eliminar Administrador"> <br><br>

    </form>
</body>
</html>