    <?php
        include("conect.php");
        $nombre = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "INSERT INTO users(username, email, password) 
        VALUES('$nombre', '$email', '$pass')";

        $result = $con->query($query);

        if($result) {
            header("Location: admUsers.php");
        } else {
            echo "Insercion Fallida";
        }
    ?>
