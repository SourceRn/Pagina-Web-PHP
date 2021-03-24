<?php
        $id=$_REQUEST['id'];

        include("conect.php");
        $nombre = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "UPDATE users SET username='$nombre', email='$email', password='pass' WHERE id='$id'";

        $result = $con->query($query);

        if($result) {
            header("Location: admUsers.php");
        } else {
            echo "Insercion Fallida";
        }
    ?>