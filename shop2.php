<?php 

session_start();
require 'config/dbconnect.php';
$db = new dbConnect();
$pdo = $db->connDB();
$query = $pdo->query('SELECT* from shop WHERE products_ID between 17 and 36');
$shop = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovesac</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/circle-xmark?s=solid&f=classic">
    <link rel="stylesheet" href="https://fontawesome.com/icons/arrow-right?s=light&f=classic">
    <script src="https://kit.fontawesome.com/3880c5a2c3.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'header.php'; ?>

    <section id="page-header">
        <h2>#freeShipping</h2>
    </section>


    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php foreach ($shop as $shop1):?>
            <div class="pro">
               <img src="img/<?php echo $shop1['image']; ?>" alt="product image">
                <div class="des">
                    <span>Lovesac</span>
                    <h5><?php echo $shop1 ['title']; ?></h5>
                    <div class="star"> 
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo $shop1 ['price']; ?></h4>
                    </div>
                <input type="submit" value="Buy now" name="submiti" onclick="<?php echo isset($_SESSION['username']) ? "window.location.href='completeBuying.php'" : "window.location.href='login.php'"; ?>">
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="pageination" class="section-p1">
        <a onclick="window.location.href='shop.php'" href="#">1</a>
        <a onclick="window.location.href='shop2.php'" href="#" >2</a>
        <a onclick="window.location.href='shop3.php'" href="#">3</a>
    </section>
    
    <?php 
    include 'footer.php';
    ?>
    

    <script src="script.js"></script>
</body>
</html>