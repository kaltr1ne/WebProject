<?php
// Replace the values in the mysqli_connect function with your own database information
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'lovesac';

// Connect to the database
$connection = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the user exists
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
      // The user exists, so check if they are an admin
      $user = mysqli_fetch_assoc($result);
      if ($user['aksesi'] == 2) {
          // The user is an admin, so redirect them to the admin page
          session_start();
          $_SESSION['username'] = $username;
          header('Location: admin');
          exit;
      } else {
          // The user is not an admin, so redirect them to the regular page
          session_start();
          $_SESSION['username'] = $username;
          header('Location: index.php');
          exit;
      }
    } else {
      // The user doesn't exist, so show an error message
      echo 'Invalid username or password';
    }
} else {
    // Handle the case where the username or password is not set
    echo 'Please enter a username and password';
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
    <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/circle-xmark?s=solid&f=classic">
    <script src="https://kit.fontawesome.com/3880c5a2c3.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'header.php'; ?>
     
    <section class="bodyy">
        <div class="login">
            <h1>Login</h1>
            <form method="post" name="LoginForm" onsubmit="return validimiLogin();">
            <?php
      if (isset($_SESSION['passGabim'])) {
        ?>
        <div class="mesazhiGabimStyle">
          <h3>Keni shenuar passwordin gabim!</h3>
          <button id="mbyllMesazhin">
            X
          </button>
        </div>
        <?php
      }
      if (isset($_SESSION['uNameGabim'])) {
        ?>
        <div class="mesazhiGabimStyle">
          <h3>Ky username nuk egziston!</h3>
          <button id="mbyllMesazhin">
            X
          </button>
        </div>
        <?php
      }
      if (isset($_SESSION['nukJeLogin'])) {
        ?>
        <div class="mesazhiGabimStyle">
          <h3>Ju lutem kyquni ose krijoni nje llogari per te vazhduar me blerjen!</h3>
          <button id="mbyllMesazhin">
            X
          </button>
        </div>
        <?php
      }
      ?>
                <div class="txt-field">
                    <input id="username" name="username" type="text" >
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt-field">
                    <input type="password" id="password" name="password">
                    <span></span>
                    <label>Password</label>
                </div>
                    <input type="submit" value="Log In" name='login'>
                    <div class="signup-link">
                        Not a member? <a onclick="window.location.href='signup.php'" href="#">Sign up</a>
                    </div>
            </form>
        </div>
    </section>
    
    <?php 
    include 'footer.php';
    ?> 

    <script src="script1.js"></script>
</body>
</html>



<?php
unset($_SESSION['passGabim']);
unset($_SESSION['uNameGabim']);
unset($_SESSION['nukJeLogin']);
?>