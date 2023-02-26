<?php
if (!isset($_SESSION)) {
  session_start();
}
require('crud/userCrud.php');

if (isset($_POST['submit'])) {
  $user = new userCrud();

  if (isset($_POST['username'])) {
    $user->setUsername($_POST['username']);
  }

  $kontrollimiUserit = $user->kontrolloUser();

  if ($kontrollimiUserit == true && isset($_POST['username'])) {
    $_SESSION['userEkziston'] = true;
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
  } else {
    $user->setEmri($_POST['name']);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    $user->shtoUser();

    $idUser = $user->idKlientiNeRegjistrim();
    $user->setUserID($idUser['userID']);
    session_destroy();
  }
}
?>



<!-- Rest of the code goes here -->



<!-- Rest of the code goes here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | Lovesac</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../messagesStyle.css" />
    <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/circle-xmark?s=solid&f=classic">
    <script src="https://kit.fontawesome.com/3880c5a2c3.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'header.php'; ?>
     
    <section class="bodyy">
        <div class="login">
            <h1>Sign up</h1>
            <form name="SignUpForm" onsubmit="return validimiSignUp();" action='' method="POST">
            <?php
             if (isset($_SESSION['regMeSukses'])) {
             ?>
            <div class="mesazhiSuksesStyle">
            <h3>U regjistruat me sukses!<button id="mbyllMesazhin">X</button></h3>
             
             </div>
             <?php
             }
            if (isset($_SESSION['userEkziston'])) {
            ?>
            <div class="mesazhiGabimStyle">
            <h3>Ky username ekziston!<button id="mbyllMesazhin">X</button></h3>
             
            </div>
            <?php
           }
            ?>
                <div class="txt-field">
                    <input type="text" id="name" name="name" type="text" >
                    <span></span>
                    <label>Name & Surname</label>
                </div>
                <div class="txt-field">
                    <input type="text" id="email" name="email" type="text" >
                    <span></span>
                    <label>E-mail</label>
                </div>
                <div class="txt-field">
                    <input type="text" id="username" name="uName" type="text" >
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt-field">
                    <input name="password" type="password" >
                    <span></span>
                    <label>Password</label>
                </div>
                <!-- <div class="pass">Forgot Password?</div> -->
                    <input class="button " type="submit" value="Sign Up" name='submit'> 
                    <div class="signup-link">
                        Already have an account? <a onclick="window.location.href='login.php'" href="#">Login</a>
                    </div>
            </form>
        </div>
    </section>

    <?php 
    include 'footer.php';
    ?>

    <script src="script1.js"></script>
    <script src="closeMessage.js"></script>
</body>
</html>

<?php
unset($_SESSION['regMeSukses']);
unset($_SESSION['userEkziston']);
?>