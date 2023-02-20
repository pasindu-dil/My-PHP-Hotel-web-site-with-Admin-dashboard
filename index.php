<?php
    session_start();
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

            <!-- Main Banner -->
            <div class="main-banner"></div>

            <!-- Content 01 -->
            <div class="overview">
                <img src="img/mainArt1.png" alt="MainArt1" class="mainArt">
                <p>Discover the eclectic paradise of Hikkaduwa and explore the surrounding beaches and countryside and the vibrant nightlife as you bask in idyllic bliss amidst the kissed beaches of southern Sri Lanka Providing you with the perfect accommadation for your beach vacation, there is no better place to experience this enchanting city than Adazons Hikkaduwa. Famed for its shallow fringing reef. Hikkaduwa is perfect for water sports such as snorkeling, scuba diving, surfing and glass bottom boat rides. Discover your "place of joy" at Adazons Hikkaduwa.</p>
                <div class="btn">
                    <button type="button">Services & Facilities</button>
                    <button type="button">View our broucher</button>
                </div><br>
                <br>
            </div>

            <!-- Title Image 02 -->
            <img src="img/MainArt2.png" alt="MainArt2" class="mainArt">

            <!-- Content 02 -->
            <div class="content-2">
                
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
            </div><br><br>

            <!-- Title Image 03 -->
            <img src="img/offersArt3.png" alt="" class="mainArt">
            <br>
            <div class="offer-card">
                <div class="content backg-1">
                    <div class="text">
                        <h4>exclusive resident offer</h4>
                        <p>- Special resident offer valid only for Sri Lankans <br>- Early check-in and late check out only based on availability<br>- This offer cannot be combined with any other offer</p>
                    </div>
                </div>
                <div class="content backg-2">
                    <div class="text">
                        <h4>exclusive resident offer</h4>
                        <p>- Special resident offer valid only for Sri Lankans <br>- Early check-in and late check out only based on availability<br>- This offer cannot be combined with any other offer</p>
                    </div>
                </div>
                <div class="content backg-3">
                    <div class="text">
                        <h4>exclusive resident offer</h4>
                        <p>- Special resident offer valid only for Sri Lankans <br>- Early check-in and late check out only based on availability<br>- This offer cannot be combined with any other offer</p>
                    </div>
                </div>
            </div><br><br>

            <div class="things">
                <div class="image">
                    <img src="img/Sport.jpg" alt="" id="img1">
                    <img src="img/jet-skiing-2.jpg" alt="" id="img2" style="height: 200px; width: 300px;">
                </div>
                <div class="text">
                    <div class="title">
                        <h3>Things to </h3><h1>do</h1>
                    </div>
                    <p>Hikkaduwa has been a favourite destination with international surfers for three decades. The wave sizes range from 4-11 feet. Surfing in Hikkaduwa is quite well known and gets the best surf during its dry season, which is from November to March. There are 4 main surf points in Hikkaduwa.</p>
                </div>
            </div>
    
            <div class="spa">
                <div class="space"></div>
                <div class="icon">
                    A
                </div>
                <div class="jumbo">
                    <h1>Spa</h1>
                    <div class="text">
                        <p>Our special therapies and treatments are administered by proficintly skilled Balinese therapist who have mastered both eastern and western remedies. Reward yourself with our relaxing special tratements and breathe in the aura of peace and comfort the envelop your soul.</p>
                    </div>
                    <button type="button">explore</button>
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
        let home = document.getElementById('home');
        home.classList.add('active');
    </script>


</body>
</html>