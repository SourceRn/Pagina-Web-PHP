<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesAdmUsr.css">
    <title>Eliminar usuario</title>
</head>
<body>
    <div class="header">
    </div>

    <div class="content">
        <br><br><p><h1>ADMINISTRAR USUARIOS</h1></p> <br><br>
        <table>
            <tbody>
                <tr>
                    <th colspan="5">LISTA DE USUARIOS</th>
                </tr>
                <tr>
                    <td id="id2">ID</td>
                    <td id="id2">User</td>
                    <td id="id2">Email</td>
                    <td id="id1">Modificar</td>
                    <td id="id1">Eliminar</td>
                </tr>

            <?php
                include("conect.php");

                $query = "SELECT id, username, email FROM users";
                $result = $con->query($query);
                while($row=$result->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['email']?></td>
                    <td id="id1"><a href="#">Modificar</a></td>
                    <td id="id1"><a href="#">Eliminar</a></td>
                </tr>
            <?php

                }
            ?>
            </tbody>
        </table><br><br><h3 id="return"><a href="index.php">REGRESAR</a></h3>
    </div>

    <div class="footer">
    </div>
</body>
</html>