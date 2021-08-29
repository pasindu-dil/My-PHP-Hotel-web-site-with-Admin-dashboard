<?php
    require_once ('../../inc/db.inc.php');

    if (isset($_GET['deleteuser'])) {
        $email = $_GET['deleteuser'];
        $sql = "delete from user where email = '$email'";
        if (mysqli_query($conn, $sql) == true) {
            header("Location: ../index.php");
        }
    }else{
        echo "eror";
    }
    $conn -> close();
?>