<?php
    require_once ('../../inc/db.inc.php');

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "delete from book where id = '$id'";
        if (mysqli_query($conn, $sql) == true) {
            header("Location: ../index.php");
        }
    }else{
        echo "eror";
    }
    $conn -> close();
?>