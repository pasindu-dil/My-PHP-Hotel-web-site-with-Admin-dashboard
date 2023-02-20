<?php
session_start();
include('inc/db.inc.php');

if (isset($_POST['delete'])) {
    $id = $_POST['book_id'];
    $sql = "DELETE FROM book WHERE id=$id";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Adazons Hotel & Resort : www.adazons.com</title>

    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="container">
        <?php include('inc/Header.php'); ?>

        <div class="container-nav">
            <!-- Nav Bar -->
            <?php include('inc/Navbar.php'); ?>
        </div>

        <div class="content-2">
            <div class="contacts" style="text-align: left; margin-top: 20px;">
                <div class="content-accm">
                    <h4>My Bookings</h4>
                </div>
                <div class="content-accm grid-book">
                    <?php
                    $sql = "select * from book where email='$_SESSION[isLogged]'";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <div class="card bookings" style="border: 1px solid black; margin: 10px; padding: 5px;">
                                <div class="card-title">
                                    <h4>Date: <?= $row["arrival"]; ?></h4>
                                </div>
                                <div class="card-text">
                                    </p>Rooms: <?= $row['room'] ?></p>
                                    <p>Adults: <?= $row['adult'] ?></p>
                                    <p>Children: <?= $row['children'] ?></p>
                                    <p>Nights: <?= $row['nights'] ?></p>
                                    <form action="" method="POST">
                                        <input type="submit" name="delete" value="Cancel" id="submit" style="width: 100%;">
                                        <input type="hidden" name="book_id" value="<?= $row['id'] ?>">
                                    </form>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <footer>
            <div class="section">
                <div class="section-1">
                    <h3>Newsletter</h3>
                    <p>Receive our latest offers, editor's picks and updates direct to your inbox.</p>
                    <div class="subscribe">
                        <input type="text" placeholder="Enter your email...">
                        <button>Sign Up</button>
                    </div>
                </div>
                <div class="section-2">
                    <h3>Adazons leisure</h3>
                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Carrier</li>
                        <li>Contact Us</li>
                        <li>#HappinesMoments</li>
                    </ul>
                </div>
                <div class="section-3">
                    <div class="contact">
                        <div id="phone">
                            <img src="img/icons8_phone_26px_1.png" alt="">
                            +94 75 6563017
                        </div>
                        <div id="office">
                            <img src="img/icons8_office_phone_24px.png" alt="">
                            +94 11 6969778
                        </div>
                        <div id="email">
                            <img src="img/icons8_Secured_Letter_60px_1.png" alt="">
                            info@adazons.com
                        </div>
                    </div>
                    <div class="social-media">
                        <img src="img/icons8_facebook_48px.png" alt="">
                        <img src="img/icons8_twitter_squared_48px.png" alt="">
                        <img src="img/icons8_instagram_48px.png" alt="">
                    </div>
                </div>
            </div>

            <footer-copy>
                <p>Copyright &copy; 2021 Adazons PLC All Rights Reserved | Developed By Dilshan</p>
            </footer-copy>
        </footer>
    </div>

    </div>
    <script>
        let menu = document.getElementById('my-account');
        menu.classList.add('active');
    </script>

</body>

</html>