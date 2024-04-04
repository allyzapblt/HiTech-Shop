<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="style.css">
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

    <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                A High-Tech platform that provides highest quality of service, reliable computer hardware products.We believe that the best way to provide a great user experience is to highly understand what people want. We want our customers to be satisfied with our products.
            </p>
            <div class="skills">
                <span>Reliable</span>
                <span>Highest Quality of Service</span>
            </div>
        </div>
    </div>
</body>
</html>