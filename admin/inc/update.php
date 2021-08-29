<?php
    include_once '../../inc/db.inc.php';

    if (isset($_GET['email'])) {
        $email = $_GET['email'];
        $sql = "select * from user where email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $fname = $row['first_name'];
                $lname = $row['last_name'];
                $mail = $row['email'];
                $username = $row['user_name'];
            }
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../styles/style.css">
</head>
<body>
    <div class="container-c">
        <div class="contacts" style="text-align: left; margin-top: 50px;">
            <form method="POST">
                <label for="">First Name</label><br>
                <input type="text" name="fname" required value="<?php echo $fname; ?>"><br>
                <label for="">Last Name</label><br>
                <input type="text" name="lname" id="" required value="<?php echo $lname; ?>"><br>
                <label for="">Your Email</label><br>
                <input type="email" name="email" required value="<?php echo $mail; ?>"><br>
                <label for="">User Name</label><br>
                <input type="text" name="uname" id="" required value="<?php echo $username; ?>"><br>
                <input type="submit" name="update" value="Update" id="">
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST['update'])){
            $ufname = $_POST['fname'];
            $ulname = $_POST['lname'];
            $uemail = $_POST['email'];
            $uuname = $_POST['uname'];
            $sql = "update user set first_name = '$ufname', last_name = '$ulname', user_name = '$uuname', email = '$uemail' where email = '$mail'";

            mysqli_query($conn, $sql);
            header('Location: ../../admin/index.php');
        }

        $conn -> close();
    ?>
</body>
</html>