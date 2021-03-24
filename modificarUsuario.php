<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
</head>
<body>
    <?php

        $id = $_REQUEST['id'];

        include("conect.php");

        $query = "SELECT id, username, email, password FROM users WHERE id='$id'";
        $result = $con->query($query);
        $row=$result->fetch_assoc();
    ?>

    <form action="opModify.php?id=<?php echo $row['id'] ?>" method="POST"> <br><br><br><br><br><br><br>
        <h1>MODIFICAR USUARIO</h1> <br><br>
        <img src="images/data_protection_100px.png" alt="">
        <br><br><br><br>
        <h3>ID</h3>
        <label><h3>USER ID: <?php echo $row['id']; ?></h3></label>
        <h3>Nombre de Usuario</h3> <br>
        <input type="text" REQUIRED name="username" placeholder="username" value="<?php echo $row['username']; ?>"> <br> <br>
        <h3>Correo de Electronico</h3> <br>
        <input type="email" REQUIRED name="email" placeholder="email" value="<?php echo $row['email']; ?>"> <br> <br>
        <h3>Contraseña</h3> <br>
        <input type="text" REQUIRED name="pass" placeholder="pass" value="<?php echo $row['password']; ?>"> <br> <br> <br> <br>

        <input type="submit" value="ACTUALIZAR DATOS" id="btnSbm">
            
    </form>
    <h3><a href="admUsers.php">CANCELAR</a></h3>

    
</body>
</html>