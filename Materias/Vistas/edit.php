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
            <h1>Editar Materia</h1>
        </div> <br><br>
        <div>
            <form action="../Controladores/edit.php" method="post">
                Nombre <br>
                <input type="text" name="Nombre" require="" autocapitalize="off" placeholder="Nombre Materia"> <br><br>

                <input type="submit" value="Editar Materia"> <br><br>
            </form>
        </div>
    </div>

</body>
</html>