<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleDlteUsr.css">
    <title>Eliminar USUARIO</title>
</head>
<body class="body">
    <header class="header">
    </header>

    <div class="content">
        <?php

            $id = $_REQUEST['id'];

            include("conect.php");

            $query = "SELECT id, username, email, password FROM users WHERE id='$id'";
            $result = $con->query($query);
            $row=$result->fetch_assoc();
        ?>

        <form action="opDelete.php?id=<?php echo $row['id'] ?>" method="POST"> <br><br><br><br><br><br><br>
        <h1>ELIMINAR USUARIO</h1> <br><br>
        <img src="images/data_protection_100px.png" alt="">
        <br><br><br><br>
        <label><h3>User ID:<br><?php echo $row['id']; ?></h3></label> <br>
        <label><h3>Username:<br><?php echo $row['username']; ?></h3></label><br>
        <label><h3>Email:<br><?php echo $row['email']; ?></h3></label><br>
        <label><h3>Password:<br><?php echo $row['password']; ?></h3></label> <br> <br>

        <input type="submit" value="ELIMINAR USUARIO" id="btnSbm">
        <h3><a href="admUsers.php">CANCELAR</a></h3>
        </form>
    </div>
    
    
</body>
</html>