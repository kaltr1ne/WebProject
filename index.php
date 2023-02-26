<?php 

session_start();
require 'dbconnect.php';
$db = new dbConnect();
$pdo = $db->connDB();
$query = $pdo->query('SELECT * from products');
$products = $query->fetchAll();

// if (isset($_POST['submiti'])) { // check if the buy now button was clicked
//     if (!isset($_SESSION['userID'])) { // check if the user is not logged in
//         header("Location: login.php"); // redirect to the login page
//         exit();
//     } else { // if the user is logged in, redirect to the buy now page
//         header("Location: completeBuying.php");
//         exit();
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovesac</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/circle-xmark?s=solid&f=classic">
    <script src="https://kit.fontawesome.com/3880c5a2c3.js" crossorigin="anonymous"></script>
</head>
<body>
 
    <?php include 'header.php'; ?>
    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 50% off!</p>
        <button class="normal" onclick="window.location.href='shop.php'">Shop now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img id="pic" src="img/FreeShipping.jpeg" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img id="pic" src="img/order_online.jpg" alt="">
            <h6>Order online</h6>
        </div>
        <div class="fe-box">
            <img id="pic" src="img/save_money.jpeg" alt="">
            <h6>Save money</h6>
        </div>
        <div class="fe-box">
            <img id="pic" src="img/happy_costumer.jpeg" alt="">
            <h6>Happy Costumers</h6>
        </div>
        <div class="fe-box">
            <img id="pic" src="img/promotion.jpeg" alt="">
            <h6>Promotion</h6>
        </div>
        <div class="fe-box">
            <img id="pic" src="img/presents.jpg" alt="">
            <h6>Presents</h6>
        </div>
        
    </section>
    <div class="section-m1">
        <img src="" id="banner10">
    </div>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Our winter collection</p>
        <div class="pro-container">
            <?php foreach ($products as $product):?>
            <div class="pro">
               <a href="<?php echo isset($_SESSION['username']) ? 'completeBuying.php' : 'login.php'; ?>"><img src="img/<?php echo $product['image']; ?>" alt="product image"></a> 
                <div class="des">
                    <span>Lovesac</span>
                    <h5><?php echo $product ['title']; ?></h5>
                    <div class="star"> 
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo $product ['price']; ?></h4>
                </div>
                <input type="submit" value="Buy now" name="submiti" onclick="<?php echo isset($_SESSION['username']) ? "window.location.href='completeBuying.php'" : "window.location.href='login.php'"; ?>">

                <!-- <input type="submit" value="Buy now" name='submiti' onclick="window.location.href='completeBuying.php'" > -->
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>50% off</span> All Furnitures & Decorations</h2>
        <button <a onclick="window.location.href='shop.php'"href="#" class="normal"></a>Explore More</button>
    </section>

    

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>Buy 1, get 1 free</h2>
            <button <a onclick="window.location.href='shop.php'"href="#" class="white">Learn more</button>
        </div>
        <div class="banner-box2">
            <h4>Crazy deals</h4>
            <h2>Buy 1, get 1 free</h2>
            <button <a onclick="window.location.href='shop.php'"href="#" class="white"></a>Learn more</button>
        </div>
    </section>
    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
    <script src="slider.js"></script>
</body>
</html>