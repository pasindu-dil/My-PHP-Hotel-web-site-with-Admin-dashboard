<div class="main-head">
    <div class="header">
        <p>DATE & TIME IN COLOMBO : <?php date_default_timezone_set("Asia/Colombo");
                                    echo (date("y-M-d") . ' : ' . date("h:i:sa")); ?></p>
    </div>
    <div class="nav-bar-2">
        <a href="index.php">Home</a>
        <a href="Accomodation.php">Accommodation</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact Us</a>
        <a href="gallery.php">Gallery</a>
        <?php
        if (isset($_SESSION['isLogged'])) {
            ?>
            <a href="myaccount.php" class="menu" id='my-account'>My Account</a>
            <a href="logout.php" class="menu" id='log-out'>Log Out</a>
            <?php
        } else {
            ?>
            <a href="login.php" id="signin" class="menu">Sign In</a>
            <a href="signup.php" class="menu">Sign Up</a>
            <?php
        }
    ?>
    </div>
</div>
<div class="empty"></div>
<div class="prim-head">
    <div class="logo">
        <h1>ADAZONS</h1>
    </div>
    <div class="selects">
        <select name="" id="">
            <option value="">Select a hotel</option>
            <option value="">Hikkaduwa</option>
            <option value="">Waskaduwa</option>
            <option value="">Kandy</option>
        </select>
        <select name="" id="">
            <option value="">Select a city</option>
            <option value="">Hikkaduwa</option>
            <option value="">Waskaduwa</option>
            <option value="">Kandy</option>
        </select>
        <select name="" id="">
            <option value="">Select a town</option>
            <option value="">Hikkaduwa</option>
            <option value="">Waskaduwa</option>
            <option value="">Kandy</option>
        </select>
    </div>
</div>