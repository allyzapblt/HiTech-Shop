<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: welcome.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HI-TECH | DASHBOARD</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/hand.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/fec7d72b56.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <section id="header">
        <a href="main.html"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="welcome.php">Home</a></li>
                <li><a href="top products.php">Top Products</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about us.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="welcome.php" class="brand"><i class='bx bxs-smile icon'></i> <?php echo $_SESSION['username']?></a></li>
                <li><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
            </ul>
        </div>
    </section>

    <div class="profile">
        <img src="" alt="">
        <ul class="profile-link">
            <li><a href="logout.php"><i class='bx bxs-log-out-circle'></i>Logout</a></li>
        </ul>
    </div>

    <section id="hero">
        <h4>All Tech need is already here</h4>
        <h2>Super Great Value Deals</h2>
        <h1>On all produts</h1>
        <br>
        <br>

        <a href="#"><button></button></a>
    </section>
<!--...
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>f24/7 Support</h6>
        </div>
        
    </section>

-->

    <script src="script.js"></script>
</body>
</html>     