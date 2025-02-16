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
                <li><a href="about us.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="welcome.php" class="brand"><i class='bx bxs-smile icon'></i> <?php echo $_SESSION['username']?></a></li>
                <div class="box"><a class="button" href="#popup1"><li id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></li></a>
            </ul>
        </div>
    </section>

    <div class="profile">
        <img src="" alt="">
        <ul class="profile-link">
            <li><a href="logout.php"><i class='bx bxs-log-out-circle'></i>Logout</a></li>
        </ul>
    </div>
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
                </ul>
            </nav>
            
        </header>
        <section class="container content-section">
            <h2 class="section-header"></h2>
            <div class="shop-items">
                <div class="shop-item">
                    <img class="shop-item-image" src="img/products/mk1.jpg">
                    <span class="shop-item-title">RAKK ILIS Mechanical Keyboard, 65%</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱ 1795.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <img class="shop-item-image" src="img/products/f12.jpg">
                    <span class="shop-item-title">RAKK TALAN Gaming Mouse</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱ 1695.00</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <img class="shop-item-image" src="img/products/f9.jpg">
                    <span class="shop-item-title">ACER PREDATOR LK-8103 Limited Edition</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱15000.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <img class="shop-item-image" src="img/products/f10.jpg">
                    <span class="shop-item-title">KINGSTON HYPERX FURY DDR4 8GB 2666MHz</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱ 1485.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <img class="shop-item-image" src="img/products/f13.jpg">
                    <span class="shop-item-title">GSTORM Dual Ring AURORA Led fan 120mm PC CPU</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱ 1265.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <img class="shop-item-image" src="img/products/f11.jpg">
                    <span class="shop-item-title">AMD Ryzen 5 5600G with Radeon Graphics 6 Core, 12 Thread Processor Up to 4.4GHz</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱ 7950.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <img class="shop-item-image" src="img/products/f14.jpg">
                    <span class="shop-item-title">Keytech T1000 Mid Tower Gaming PC Case Black/White, T1000 Mid Tower Gaming Case
                    </span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱ 1485.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

                <div class="shop-item">
                    <img class="shop-item-image" src="img/products/f15.png">
                    <span class="shop-item-title">Kingston NV1 1TB M.2 2280 NVMe PCIe SSD (SNVS/1000G)</span>
                    <div class="shop-item-details">
                        <span class="shop-item-price">₱ 7950.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>

            </div>
        </section>
    </body>
</html>