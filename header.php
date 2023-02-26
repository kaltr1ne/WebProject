<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovesac</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/circle-xmark?s=solid&f=classic">
    <link rel="stylesheet" href="https://fontawesome.com/icons/arrow-right?s=light&f=classic">
    <script src="https://kit.fontawesome.com/3880c5a2c3.js" crossorigin="anonymous"></script>
</head>
<body>

<section id="header">
        <a href=#><img src="img/logo/logo_200x200.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <?php if(isset($_SESSION['username'])): ?>
                    <p>Hello <?php echo $_SESSION['username']; ?> </p>
                <?php endif; ?>
                <li class = "<?= ($activePage == 'index.php')? 'active':' '?>"><a href="index.php">Home</a></li>
                <li class = "<?= ($activePage == 'shop.php')? 'active':' '?>"><a href="shop.php">Shop</a></li>
                <li class = "<?= ($activePage == 'contact.php')? 'active':' '?>"><a href="contact.php">Contact</a></li>
                <li class = "<?= ($activePage == 'about.php')? 'active':' '?>"><a href="about.php">About</a></li>
                <?php if(isset($_SESSION['username'])): ?>
                    <li><a href="logout.php">Log out</a></li>
                <?php else: ?>
                    <li class = "<?= ($activePage == 'login.php')? 'active':' '?>"><a href="login.php">Log in</a></li>
                <?php endif; ?>
        
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>
</body>
</html>
