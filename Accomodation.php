<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomodation - Adazons Hotel & Resort : www.adazons.com</title>

    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
<div class="container-c">
        <?php include('inc/Navbar_2.php'); ?>
        
    </div>
    <div class="banner-accom">

    </div>

    <div class="content-accm">
                
        <div class="card">
            <img src="img/Accomadation01.jpg" alt="">
            <div class="card-title">
                <p>deluxe room</p>
            </div>
            <div class="card-text">
                Designed to inspire rest and relaxation, our sleek, modern Deluxe Rooms become a home.
            </div>
            <button type="button">See More</button>
        </div>
        <div class="card">
            <img src="img/Accomodation.jpg" alt="">
            <div class="card-title">
                <p>eco budget room</p>
            </div>
            <div class="card-text">
                For the traveler on a budget, our Eco-Budget rooms are guranteed to provide all the essential comforts.
            </div>
            <button type="button">See More</button>
        </div>
        <div class="card">
            <img src="img/Accomodation.02jpg.jpg" alt="">
            <div class="card-title">
                <p>superior room</p>
            </div>
            <div class="card-text">
                Our Superior Rooms provide guests with all they need for a pleasant stay in sunny Hikkaduwa.
            </div>
            <button type="button">See More</button>
        </div>
    </div>

    <?php include('inc/Footer.php'); ?>

</body>
</html>