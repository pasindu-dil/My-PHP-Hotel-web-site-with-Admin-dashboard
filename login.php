<?php
session_start();
include('inc/db.inc.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Adazons Hotel & Resort : www.adazons.com</title>

    <link rel="stylesheet" type="text/css" href="styles/style.css">

</head>
<body>
    <div class="container-signup">
    
    
        <div class="body">
            <div style="text-align: left;">
                <a style="font-size: 13px; color: #0000ff; text-decoration: underline;" href="/index.php">Back to home</a>
            </div>
            <div class="head">
                
                <div class="logo-main">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="page-title">
                    <h1>Sign In</h1>
                </div>
            </div>
            <div class="form">
                <form method="POST">
                    <label for="">User Name*</label><br>
                    <input type="text" name="uname" required placeholder="Enter your user name..."><br>
                    <label for="">Password*</label><br>
                    <input type="password" name="passw" placeholder="Enter your password..." required><br>
                    
                    <input type="submit" name="submit" value="Submit" id="submit" style="margin-top: 5px;">
                    <div style="text-align: center; font-size: 13px; margin-top: 10px;">
                        <a style="text-align: center; font-size: 13px; color: blue; text-decoration: underline;" href="">I frogot my password.</a><br><br>
                        If you don't have an account yet... <br><a href="/signup.php" style="text-align: center; font-size: 13px; color: blue; text-decoration: underline;">Create a new account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        
        if(isset($_POST['submit'])){
            $email = $_POST['uname'];
            $passw = $_POST['passw'];

            $sql = "select * from user where email = '$email' and password = '$passw'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $_SESSION['attempt'] = true;
                
                while($row = mysqli_fetch_assoc($result)){
                    $_SESSION['isLogged'] = $row['email'];
                    if($row['AuthLevel'] == "admin"){
                        header("Location: ./admin/index.php");
                    }else{
                        header("Location: index.php");
                    }
                }
            }else{
                echo "error";
            }

        }

        $conn -> close();
    ?>


</body>
</html>