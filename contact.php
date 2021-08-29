<?php
    session_start();
    include_once('inc/db.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Adazons Hotel & Resort : www.adazons.com</title>
    
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <div class="container-c">
        <?php include('inc/Navbar_2.php'); ?>

        <div class="banner">
            
        </div>

        <!-- Form -->
        <h1 style="margin-left: 70px;">Contact Us</h1>
        <div class="contacts" style="text-align: left;">
            <form method="POST">
                <label for="">Your Name*</label><br>
                <input type="text" name="name" required><br>
                <label for="">Your Email*</label><br>
                <input type="email" name="email" required><br>
                <label for="">Required Hotel*</label><br>
                <input type="text" name="hotel" id="" required><br>
                <label for="">Subject</label><br>
                <input type="text" name="subject" id=""><br>
                <label for="">Your Message</label><br>
                <textarea name="message" id="" cols="30" rows="2"></textarea><br>
                <input type="submit" name="submit" value="submit" id="">
            </form>
            <div class="address">
                <h4>Adazons hotels plc</h4>
                <p>No 7/5, Galle Road, Hikkaduwa, Sri Lanka</p>
                <p>Phone: +94 75 656 3017</p>
                <p>Email : info@adazons.com</p>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['submit'])){
            if($_SESSION['attempt'] == true){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $hotel = $_POST['hotel'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $sql = "insert into messages(name, email, hotel, subject, message) values('$name', '$email', '$hotel', '$subject', '$message')";

                mysqli_query($conn, $sql);

                mysqli_close($conn);
                echo '<p id="successmsg" style="text-align: center; color: white; background-color: blue; padding: 26px;">';
                echo 'Successfully sent your message...';
                echo '</p>';
            }else{
                header("Location: login.php");
            }
        }
    ?>

    <?php include('inc/Footer.php') ?>

</body>
</html>

