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
    <title>Book Now - Adazons Hotel & Resort : www.adazons.com</title>

    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

    <div class="container-c">

        <?php include('inc/Navbar_2.php') ?>

        <form action="" id="roomSelect">
            <div class="roomSearch">
                <div>
                    <label for="">Room Type : </label>
                    <select name="room" id="">
                        <option value="deluxe">Deluxe Suite</option>
                        <option value="superior">Superior Room</option>
                        <option value="executive">Executive Suite</option>
                    </select>
                </div>
                <div>
                    <label for="">Check In Date : </label>
                    <input type="date" required name="date" id="">
                </div>
                <div>
                    <label for="">Check Out Date : </label>
                    <input type="date" required name="date" id="">
                </div>
                <input type="submit" name="submit" id="" value="Search">
            </div>
        </form>

        <div class="content booking-rooms">
            <div class="rooms">
                <div class="card">
                    <div class="title">
                        <h4>Eclusive Resident Offfer</h4>
                        <h5>(showing lowest rates)</h5>
                    </div>
                    <div class="rates">
                        <h4>Superior</h4>
                        <hr>
                        <div class="">
                            <div class="title">
                                Bed and Breakfast
                            </div>
                            <div class="price">
                                From : LKR 26,000.00
                            </div>
                            <div class="action">
                                <button>Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer">
                    sfjdskh
            </div>
        </div>

        <form class="formBook" action="" method="POST">
            <label for="">Your Email</label><br>
            <input type="email" name="email" required id="" placeholder="Enter your email..."><br><br>
            <label for="">Arrival</label><br>
            <input type="date" required name="date" id=""><br><br>
            <select name="room" id="">
                <option value="1 Room">1 Room</option>
                <option value="2 Rooms">2 Rooms</option>
                <option value="3 Rooms">3 Rooms</option>
                <option value="4 Rooms">4 Rooms</option>
                <option value="5 Rooms">5 Rooms</option>
                <option value="6 Rooms">6 Rooms</option>
                <option value="7 Rooms">7 Rooms</option>
                <option value="8 Rooms">8 Rooms</option>
                <option value="9 Rooms">9 Rooms</option>
                <option value="10 Rooms">10 Rooms</option>
            </select>
            <select name="adult" id="">
                <option value="1 Adult">1 Adult</option>
                <option value="2 Adult">2 Adult</option>
                <option value="3 Adult">3 Adult</option>
            </select>
            <select name="child" id="">
                <option value="0 Children">0 Children</option>
                <option value="1 Children">1 Children</option>
                <option value="2 Children">2 Children</option>
            </select><br><br>
            <label for="">Nights</label>
            <div class="counter">
                <label id="plus">+</label>
                <input type="text" name="night" id="num" readonly>
                <label id="minus">-</label><br>
            </div>
            <input type="submit" name="submit" id="" value="submit">
        </form>
    </div>

    <?php
        if(isset($_POST['submit'])){
            if($_SESSION['attempt'] == true){
                $mail = $_POST['email'];
                $date = $_POST['date'];
                $room = $_POST["room"];
                $adult = $_POST["adult"];
                $child = $_POST['child'];
                $night = $_POST['night'];

                $sql = "insert into book(email, arrival, room, adult, children, nights) values('$mail', '$date', '$room', '$adult', '$child', '$night')";

                mysqli_query($conn, $sql);
            }else{
                header("Location: login.php");
            }
        }
        $conn -> close();
    ?>

    <?php include('inc/Footer.php'); ?>
    
    <script src="./styles/main.js"></script>
</body>
</html>