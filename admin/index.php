
<?php include_once ('../inc/db.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adazons Hotel & Resort Admin Panel</title>

    <link rel="stylesheet" href="../admin/styles/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="side-bar" id="sideNav">
            <span><img src="../img/groupLogo.png" alt=""></span>
            <ul>
                <li id="dashboard"><span><img src="./img/icons8_home_page_24px_2.png" alt=""></span><a href="#">Dashboard</a></li>
                <li id="analytics"><span><img src="./img/icons8_increase_24px.png" alt=""></span><a href="#">Messages</a></li>
                <li id="book"><span><img src="./img/icons8_ticket_24px.png" alt=""></span><a href="#">Booking</a></li>
                <li id="users"><span><img src="./img/icons8_person_24px.png" alt=""></span><a href="#">Users</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="navBar">
                <div class="left" style="display: flex; align-items: center;">
                    <span><img src="./img//icons8_menu_24px.png" alt=""></span>
                    <a href=".././index.php" style="padding-left: 18px;"><p>Visit adazons.com</p></a>
                </div>
                <div class="right">
                    
                    <img src="./img//icons8_male_user_50px.png" alt="">
                </div>
            </div>
        </div>
        
    </div>
    
        <div class="content">
            <div class="tabs active" id="dashboardTab">
                <div class="dashboard">
                    <div class="notify">
                        All data will be updated every 30seconds...
                    </div>
            
                    <div class="title-box">
                        <h3><span><img src="./img/icons8_google_home_48px.png" alt=""></span> Dashboard</h3>
                        <p>Overview</p>
                    </div>
            
                    <div class="card-box">
                        <div class="card1 card">
                            <h4>All Bookings</h4>
                            <p><?php $sql = "select count(id) as count from book"; $result = mysqli_query($conn, $sql); 
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['count'];
                                }
                            } ?></p>
                            <h5>Increase by 60%</h5>
                        </div>
                        <div class="card2 card">
                            <h4>All Users</h4>
                            <p><?php $sql = "select count(email) from user where AuthLevel = 'user'"; $result = mysqli_query($conn, $sql); 
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo $row['count(email)'];
                                }
                            } ?></p>
                            <h5>Increase by 60%</h5>
                        </div>
                        <div class="card3 card">
                            <h4>Rooms Available</h4>
                            <p>12</p>
                            <h5>Increase by 60%</h5>
                        </div>
                    </div>

                    <table>
                        <tr>
                            <th>ID</th>
                            <th>E-mail</th>
                            <th>Arraival</th>
                            <th>Rooms</th>
                            <th>Adult</th>
                            <th>Children</th>
                            <th>Nights</th>
                        </tr>
                        <?php 
                            $sql = "select * from book";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>'. $row['id'] .'</td>';
                                    echo '<td>'. $row['email'] .'</td>';
                                    echo '<td>'. $row['arrival'] .'</td>';
                                    echo '<td>'. $row['room'] .'</td>';
                                    echo '<td>'. $row['adult'] .'</td>';
                                    echo '<td>'. $row['children'] .'</td>';
                                    echo '<td>'. $row['nights'] .'</td>';
                                    echo '</tr>';
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>

            <div class="tabs" id="analyticsTab">
                <div class="dashboard" >
                    <div class="notify">
                        All data will be updated every 30seconds...
                    </div>
            
                    <div class="title-box">
                        <h3><span><img src="./img/icons8_google_home_48px.png" alt=""></span> Messages</h3>
                        <p>Overview</p>
                    </div>

                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Hotel</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                            $sql = "select * from messages";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>'. $row['id'] .'</td>';
                                    echo '<td>'. $row['name'] .'</td>';
                                    echo '<td>'. $row['email'] .'</td>';
                                    echo '<td>'. $row['hotel'] .'</td>';
                                    echo '<td>'. $row['subject'] .'</td>';
                                    echo '<td>'. $row['message'] .'</td>';
                                    echo '<td>
                                            <a href="inc/delete.php?delete='.$row['id'].'" class="action">Delete</a></td>';
                                    echo '</tr>';
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>

            <div class="tabs" id="bookingTab">
                <div class="dashboard" >
                    <div class="notify">
                        All data will be updated every 30seconds...
                    </div>
            
                    <div class="title-box">
                        <h3><span><img src="./img/icons8_google_home_48px.png" alt=""></span> Booking</h3>
                        <p>Overview</p>
                    </div>

                    <table>
                        <tr>
                            <th>ID</th>
                            <th>E-mail</th>
                            <th>Arraival</th>
                            <th>Rooms</th>
                            <th>Adult</th>
                            <th>Children</th>
                            <th>Nights</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                            $sql = "select * from book";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>'. $row['id'] .'</td>';
                                    echo '<td>'. $row['email'] .'</td>';
                                    echo '<td>'. $row['arrival'] .'</td>';
                                    echo '<td>'. $row['room'] .'</td>';
                                    echo '<td>'. $row['adult'] .'</td>';
                                    echo '<td>'. $row['children'] .'</td>';
                                    echo '<td>'. $row['nights'] .'</td>';
                                    echo '<td>
                                            <a href="inc/book.delete.php?delete='.$row['id'].'" class="action">Delete</a></td>';
                                    echo '</tr>';
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>

            <div class="tabs" id="userTab">
                <div class="dashboard" >
                    <div class="notify">
                        All data will be updated every 30seconds...
                    </div>
            
                    <div class="title-box">
                        <h3><span><img src="./img/icons8_google_home_48px.png" alt=""></span> Users</h3>
                        <p>Overview</p>
                    </div>

                    <table>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>User Name</th>
                            <th>E-mail</th>
                            <th>Creation Date & Time</th>
                            <th>Authentication Level</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                            $sql = "select * from user where AuthLevel = 'user'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>'. $row['first_name'] .'</td>';
                                    echo '<td>'. $row['last_name'] .'</td>';
                                    echo '<td>'. $row['user_name'] .'</td>';
                                    echo '<td>'. $row['email'] .'</td>';
                                    echo '<td>'. $row['date'] .'</td>';
                                    echo '<td>'. $row['AuthLevel'] .'</td>';
                                    echo '<td>
                                            <a href="inc/update.php?email='.$row['email'].'" class="action">Edit</a> |  
                                            <a href="inc/user.delete.php?deleteuser='.$row['email'].'" class="action">Delete</a></td>';
                                    echo '</tr>';
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>

        <script src="../admin/styles/main.js"></script>
</body>
</html>