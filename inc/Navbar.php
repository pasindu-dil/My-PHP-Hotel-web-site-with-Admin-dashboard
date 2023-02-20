<!-- Nav Bar -->
<div class="nav-bar">
    <a href="/index.php" class="menu" id="home">Home</a>
    <a href="Accomodation.php" class="menu">Accommodation</a>
    <a href="about.php" class="menu">About Us</a>
    <a href="contact.php" class="menu">Contact Us</a>
    <a href="gallery.php" class="menu">Gallery</a>
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
    <a href="booknow.php" style="background-color: green; align-items: center; color: white; padding: 10px;">BOOK NOW</a>
</div>

<script>
    // let link = document.getElementsByClassName('menu');
    // document.addEventListener('click', (event) => {
    //     event.target.classList.add('active');
    // });
</script>