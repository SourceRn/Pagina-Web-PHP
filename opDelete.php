<?php
        $id=$_REQUEST['id'];
        include("conect.php");

        $query = "DELETE FROM users WHERE id='$id' ";

        $result = $con->query($query);

        if($result) {
            header("Location: admUsers.php");
        } else {
            echo "Insercion Fallida";
        }
    ?>