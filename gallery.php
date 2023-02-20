<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Adazons Hotel & Resort : www.adazons.com</title>

    <link rel="stylesheet" type="text/css" href="styles/style.css">

</head>
<body>

    <div class="container-c">
        <?php include('inc/Navbar_2.php'); ?>

        <div class="gallery">
            <div class="img1"><div class="bg"></div></div>
            <div class="img2"><div class="bg"></div></div>
            <div class="img3"><div class="bg"></div></div>
            <div class="img4"><div class="bg"></div></div>
        </div>
        <div class="gallery">
            <div class="img2"><div class="bg"></div></div>
            <div class="img3"><div class="bg"></div></div>
            <div class="img4"><div class="bg"></div></div>
            <div class="img1"><div class="bg"></div></div>
        </div>

    </div>

    <?php include('inc/Footer.php'); ?>
    
</body>
</html>