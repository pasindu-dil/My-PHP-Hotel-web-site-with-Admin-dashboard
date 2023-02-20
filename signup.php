<?php 
include_once 'inc/db.inc.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Adazons Hotel & Resort : www.adazons.com</title>

    <link rel="stylesheet" type="text/css" href="styles/style.css">

</head>
<body>

    

    <div class="container-signup">
        <div class="body">
            <div style="text-align: left;">
                <a style="font-size: 13px; color: #0000ff; text-decoration: underline;" href="/index.php">Back to home</a>
                
            </div>
            <?php
                
                if (isset($_POST['submit'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $uname = $_POST['uname'];
                    $email = $_POST['email'];
                    $passw = $_POST['pass'];
                    $cpassw = $_POST['cpass'];
                    if ($passw == $cpassw) {
                        $sql = "insert into user(first_name, last_name, user_name, email, password, AuthLevel) values('$fname', '$lname', '$uname', '$email', '$passw', 'user')";

                        mysqli_query($conn, $sql);
                        header("Location: login.php");
                    }else{
                        echo '<p>'; echo 'Conformation password and password does not same...'; echo'</p>';
                    }
                }
            ?>

            <div class="head">
                <div class="logo-main">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="page-title">
                    <h1>Sign Up</h1>
                </div>
            </div>
            <div class="form">
                <form method="POST">
                    <label for="">First Name*</label><br>
                    <input type="text" name="fname" required placeholder="Enter your first name..."><br>
                    <label for="">Last Name*</label><br>
                    <input type="text" name="lname" placeholder="Enter your last name..." required><br>
                    <label for="">User Name*</label><br>
                    <input type="text" name="uname" placeholder="Enter your username..." required><br>
                    <label for="">Email*</label><br>
                    <input type="email" name="email" placeholder="Enter your email..." required><br>
                    <label for="">Password*</label><br>
                    <input type="password" name="pass" placeholder="Enter your password..." required><br>
                    <label for="">Conform Password*</label><br>
                    <input type="password" name="cpass" placeholder="Conform your password..." required><br>
                    <input type="checkbox">
                    <p>Are you agree with our terms & conditions</p>
                    <input type="submit" name="submit" value="Submit" id="submit">
                </form>
            </div>
            <div style="text-align: center; font-size: 13px; margin-top: 10px;">
                Allready have an account... <br><a href="/login.php" style="text-align: center; font-size: 13px; color: blue; text-decoration: underline;">Sign in here.</a>
            </div>
        </div>
    </div>

    

</body>
</html>