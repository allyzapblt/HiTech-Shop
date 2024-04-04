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
                <li><a href="index.php">Home</a></li>
                <li><a href="top products.php">Top Products</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about us.php">About</a></li>
                <li><a href="index.php" class="brand"><i class='bx bxs-smile icon'></i> <?php echo $_SESSION['username'] ?></a></li>
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
                <img class="shop-item-image" src="img/products/hd1.jpg">
                <span class="shop-item-title">SEAGATE 500GB BARRACUDA 3.5" SATA III 6GB/S 7200RPM INTERNAL HDD (ST500DM002)-HK</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 980.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/hd2.jpg">
                <span class="shop-item-title">Seagate Barracuda 1TB SATA 3.5 7200RPM Internal HDD ( Hard Disk Drive ) ST1000DM010</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 2165.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/hd3.jpg">
                <span class="shop-item-title">PC HDD 500GB 320GB 3.5‘’ Internal Hard Drive Disk 3.5 inch 7200RPM 64M Cache SATA Desktop HDD </span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 999.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/hd4.jpg">
                <span class="shop-item-title">Seagate Barracuda ST1000DM010 1TB SATA internal Hard Disk Drive 3.5"</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 3500.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/hd5.jpg">
                <span class="shop-item-title">SEAGATE 2TB SKYHAWK SURVEILLANCE 3.5" SATA III 6GB/S 5900RPM INTERNAL HDD</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 3650.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/hd6.jpg">
                <span class="shop-item-title">SEAGATE 4TB BARRACUDA 3.5" SATA III 6GB/S 5400RPM INTERNAL HDD</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 5280.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/hd7.jpg">
                <span class="shop-item-title">Toshiba 1TB Internal Hard Disk Drive HDD 3.5 SATA PC </span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 2120.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

            <div class="shop-item">
                <img class="shop-item-image" src="img/products/hd8.jpg">
                <span class="shop-item-title">Toshiba HDWL120XZSTA L200 2TB Laptop PC Internal Hard Drive</span>
                <div class="shop-item-details">
                    <span class="shop-item-price">₱ 3774.00</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                </div>
            </div>

        </div>
    </section>
</body>

</html>