<?php
if (!isset($_SESSION)) {
  session_start();
}

require_once('crud/contactCrud.php');

if (isset($_POST['dergoMSG'])) {
  $cCrud = new contactCrud();

  $cCrud->setEmri($_POST['name']);
  $cCrud->setEmail($_POST['email']);
  $cCrud->setMessage($_POST['msgField']);
  // Add a check to make sure 'msgField' is set before accessing its value
//   if (isset($_POST['msgField'])) {
   
//   }

  $cCrud->insertMessage();
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

    <section id="page-header">
        <h2>#contactUs</h2>
        <p>For further information</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="contact">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa-solid fa-map"></i>
                    <p>566 Gonzales St. South Plainfield, NJ 07080</p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p>lovesac@gmail.com</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>559-281-1263</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48488.44296994192!2d-74.49837684631349!3d40.57410632248962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3b959ce81ad81%3A0x2ff174b00a033cae!2sCubeSmart%20Self%20Storage!5e0!3m2!1sen!2s!4v1672001318950!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="" name="ContactForm" onsubmit="return validimiContactForm()" action="" method="POST">
          <?php
          if (isset($_SESSION['mesazhiMeSukses'])) {
           ?>
          <div class="mesazhiSuksesStyle">
          <h3>Mesazhi juaj u dergua me sukses!</h3>
          <button id="mbyllMesazhin">
            X
          </button>
          </div>
          <?php
          }
            ?>
            <span>LEAVE A MESSAGE HERE</span>
            <h2>Get in touch with us</h2>
            <input type="text" name="name" type="text" placeholder="Name">
            <input type="text" name="email" type="text" placeholder="Email">
            <textarea name="msgField" cols="30" rows="10" placeholder="Enter your message!" ></textarea>
            <input class="button" type="submit" value="Send" name="dergoMSG">
        </form>
    </section>

    
    <?php 
    include 'footer.php';
    ?>

    
    <script src="script1.js"></script>
    <scripts src="../closeMessage.js"></scripts>
</body>
</html>
<?php
unset($_SESSION['mesazhiMeSukses']);
?>