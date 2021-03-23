<?php
    include("conect.php");
    $nombre = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO users(username, email, password) 
    VALUES('$nombre', '$email', '$pass')";

    $result = $con->query($query);

    if($result) {
        echo "Insercion exitosa";
    } else {
        echo "Fallo al insertar los datos";
    }
?>