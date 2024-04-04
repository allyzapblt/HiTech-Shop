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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HI-TECH | DASHBOARD</title>
    <link rel="stylesheet" href="style.css" />
    <script src="store.js" async></script>
    <script src="https://kit.fontawesome.com/df46d211e6.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/hand.ico" type="image/x-icon">
</head>
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
                <li><a href="welcome.php" class="brand"><i class='bx bxs-smile icon'></i> <?php echo $_SESSION['username'] ?></a></li>
                <div class="box"><a class="button" href="#popup1">
                        <li id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></li>
                    </a>
            </ul>
        </div>
    </section>

    <div class="profile">
        <img src="" alt="">
        <ul class="profile-link">
            <li><a href="logout.php"><i class='bx bxs-log-out-circle'></i>Logout</a></li>
        </ul>
    </div>

    <main>
        <div class="categories">
            <a href="gpu.php"><button class="button">GPU</button></a>
            <a href="hdd.php"><button class="button">HDD</button></a>
            <a href="keyboard.php"><button class="button">Keyboard</button></a>
            <a href="mouse.php"><button class="button">Mouse</button></a>
            <a href="psu.html"><button class="button">Power Supply</button></a>
            <a href="processor.html"><button class="button">Processor</button></a>
            <a href="ram.html"><button class="button">RAM</button></a>
            <a href="ssd.html"><button class="button">SSD</button></a>
        </div>
    </main>
    <!---               
<div class="box">
    <a class="button" href="#popup1"><li id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></li></a>
</div>-->
    <div id="popup1" class="overlay">
        <div class="popup">
            <section class="container content-section">
                <h2 class="section-header">CART</h2>
                <a class="close" href="#">&times;</a>
                <div class="cart-row">
                    <span class="cart-item cart-header cart-column">ITEM</span>
                    <span class="cart-price cart-header cart-column">PRICE</span>
                    <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                </div>
                <div class="cart-items">
                </div>
                <div class="cart-total">
                    <strong class="cart-total-title">Total</strong>
                    <span class="cart-total-price">$0</span>
                </div>
                <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
            </section>
        </div>
    </div>


    <section class="container content-section">
        <h2 class="section-header"></h2>
        <div class="shop-items">
            <div class="shop-item">
                <img class="shop-item-image" src="img/products/ms1.jpg">
                <span class="shop-item-title">Logitech G304 Wireless Mouse</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 1340.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/ms2.jpg">
                <span class="shop-item-title">Logitech Pebble M350</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 865.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/ms3.jpg">
                <span class="shop-item-title">Razer Viper Mini Ultra Light Gaming Mouse</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 1145.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/ms4.jpg">
                <span class="shop-item-title">Logitech G502</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 2240.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/ms5.jpg">
                <span class="shop-item-title">Fantech VX7 CRYPTO Gaming Mouse</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 3,650.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/ms6.jpg">
                <span class="shop-item-title">HP Genius M160 Gaming Mouse</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 3980.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/ms7.jpg">
                <span class="shop-item-title">Logitech M331 </span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 1150.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/ms8.jpg">
                <span class="shop-item-title">Logitech M590 Multi-Device Silent</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 2474.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

        </div>
    </section>
</body>

</html>