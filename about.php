<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovesac</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="messagesStyle.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/circle-xmark?s=solid&f=classic">
    <script src="https://kit.fontawesome.com/3880c5a2c3.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'header.php'; ?>

    <section id="page-header" class="about-header">
        <h2>#KnowUs</h2>

        <p>We know Lovesac, in fact we created it :)</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/0-02-05-11d1983cb4e3576154ac3adde08ea5abe6da2e40c1b54ca53b4f91ded387e76a_f56ea8f95f524df.jpg" alt="">
        <div>
            <h2>Who are we?</h2>
            <p>Lovesac is a bussiness to make your house feel like a home.
               Launched in 2019, Lovesac's great programming strategy has established it as one of the best furniture shopping websites.
               We're a fully distributed team of 50 people working in 5 countries around the world to build the best products for our costumers.
               Since the early days, we've had a focus on building the most unique and fulfilling workplace, but also making this website very easy to use.
            </p>
        </div>
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

   
    <?php 
    include 'footer.php';
    ?>
    

    <script src="script.js"></script>
</body>
</html>