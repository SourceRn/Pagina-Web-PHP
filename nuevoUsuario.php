<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="css/styleNuevoUsr.css">
</head>

<body class="body">

    <div class="header">
    </div>

    <div class="content">
        <form action="opSave.php" method="POST"> <br><br><br><br><br><br><br>
                <h1>REGISTRO PARA NUEVOS USUARIOS</h1> <br><br>
                <img src="images/data_protection_100px.png" alt="">
               <br><br><br><br>
            <h3>Nombre de Usuario</h3> <br>
            <input type="text" REQUIRED name="username" placeholder="username"> <br> <br>
            <h3>Correo de Electronico</h3> <br>
            <input type="email" REQUIRED name="email" placeholder="email"> <br> <br>
            <h3>Contraseña</h3> <br>
            <input type="password" REQUIRED name="pass" placeholder="password"> <br> <br> <br> <br>

            <input type="submit" value="Registrar" id="btnSbm" target="_blank">
            <h3 id="return"><a href="index.php">REGRESAR</a></h3>
            
        </form>

        
    </div>

    <div class="footer">
    </div>
</body>
</html>