<?php
if (!isset($_SESSION)) {
  session_start();
}

require_once('crud/buyNowCrud.php');

if (isset($_POST['submit'])) {
  $cCrud = new buyNowCrud();

  $cCrud->setName($_POST['name']);
  $cCrud->setSurname($_POST['surname']);
  $cCrud->setUsername($_POST['username']);
  $cCrud->setEmail($_POST['email']);
  $cCrud->setContactNumber($_POST['contactNumber']);
  $cCrud->setAddress($_POST['address']);
  $cCrud->setEmriProduktit($_POST['emriProduktit']);
  $cCrud->setSasia($_POST['sasia']);
  $cCrud->setNgjyra($_POST['ngjyra']);
  $cCrud->setCoupon($_POST['coupon']);

  $cCrud->addOrder();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/circle-xmark?s=solid&f=classic">
    <script src="https://kit.fontawesome.com/3880c5a2c3.js" crossorigin="anonymous"></script>
</head>
<body>
 
    <?php include 'header.php'; ?>

    <section id="page-header" class="about-header">
        <h2>#Buy</h2>

        <p>Lovesac</p>
    </section> 

    <h2>Te dhenat e tua</h2>
  <form name="BuyNowForm" action="" onsubmit="return validimiBuyNowForm()" method="POST" >
          <?php
            if (isset($_SESSION['mesazhiMeSukses'])) {
          ?>
           <div class="mesazhiSuksesStyle">
            <h3>Blerja e juaj u krye me sukses!<button id="mbyllMesazhin">X</button></h3>
          </div>
          <?php
          }
          ?>
          <table>
                <tr>
                  <td><strong>Name:</strong></td>
                  <td>
                    <input type="text" name="name" placeholder="" value="<?php echo $_POST['name'] ?? '' ?>">
                  </td>
                </tr>
              <tr>
                  <td><strong>Surname:</strong></td>
                    <td>
                      <input type="text" name="surname" placeholder="" value="<?php echo $_POST['surname'] ?? '' ?>">
                  </td>
              </tr>
              <tr>
                <td><strong>Username:</strong></td>
                  <td>
                    <input type="text" name="username" placeholder="" value="<?php echo $_POST['username'] ?? '' ?>">
                  </td>
                </tr>
              <tr>
                <td><strong>Email:</strong></td>
                  <td>
                    <input type="text" name="email" placeholder="" value="<?php echo $_POST['email'] ?? '' ?>">
                  </td>
              </tr>
              <tr>
                <td><strong>Contact Number:</strong></td>
                  <td>
                    <input type="text" name="contactNumber" placeholder="" value="<?php echo $_POST['contactNumber'] ?? '' ?>">
                  </td>
              </tr>
              <tr>
                <td><strong>Address: </strong></td>
                  <td>
                    <input type="text" name="address" placeholder="" value="<?php echo $_POST['address'] ?? '' ?>">
                  </td>
              </tr>
              <tr>
                <td><strong>Emri Produktit: </strong></td>
                  <td>
                    <input type="text" name="emriProduktit" placeholder="" value="<?php echo $_POST['emriProduktit'] ?? '' ?>" >
                  </td>
              </tr>
              <tr>
                <td><strong>Sasia: </strong></td>
                  <td>
                     <input type="number" name="sasia" value="1" value="<?php echo $_POST['sasia'] ?? '' ?>">
                  </td>
              </tr>
              <tr>
                  <td><strong>Ngjyra: </strong></td>
                    <td>
                      <select name="ngjyra" value="<?php echo $_POST['ngjyra'] ?? '' ?>">
                              <option>Select color</option>
                              <option>Red</option>
                              <option>Black</option>
                              <option>Grey</option>
                              <option>Blue</option>
                      </select>
                    </td>
                </tr>
            </table>
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon" name="coupon" value="<?php echo $_POST['coupon'] ?? '' ?>">
                <input class="button" type="submit" value="Buy" name="submit">
            </div>
        </div>
    </section>
  </form>
    <!-- <section class="bodyy">
        <div class="login">
            <h1>Login</h1>
      <form name="LoginForm" onsubmit="return validimiLogin();" action='' method="POST" length="50px">
                <div class="txt-field">
                    <input type="text" id="name" name="name" type="text" >
                    <span></span>
                    <label>Name</label>
                </div>
                <div class="txt-field">
                    <input type="text" id="surname" name="name" type="text" >
                    <span></span>
                    <label>Surname</label>
                </div>
                <div class="txt-field">
                    <input type="text" id="email" name="email" type="text" >
                    <span></span>
                    <label>E-mail</label>
                </div>
                <div class="txt-field">
                    <input type="text" id="adress" name="uName" type="text" >
                    <span></span>
                    <label>Address</label>
                </div>
                <div class="txt-field">
                    <input type="text" id="numebr" name="uName" type="text" >
                    <span></span>
                    <label>Number</label>
                </div>
                <div class="txt-field">
                    <input type="text" id="card" name="uName" type="text" >
                    <span></span>
                    <label>Card Number</label>
                </div>
                <div class="txt-field">
                    <input name="password" type="password" >
                    <span></span>
                    <label>Password</label>
                </div>
                    <div class="pass">Forgot Password?</div> -->
                    <!--  
                    <div class="signup-link">
                        Already have an account? <a onclick="window.location.href='login.php'" href="#">Login</a>
                    </div>
            </form>
        </div>
    </section> --> 
    



    <?php 
    include 'footer.php';
    ?>

    <script src="script.js"></script>
    <script src="script1.js"></script>
    <script src="closeMessages.js"></script>
</body>
<style>
    /* Style for the input fields and labels */
table {
  border-collapse: collapse;
  width: 100%;
  max-width: 600px;
}

td {
  padding: 10px;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 16px;
}
input[type="number"] {
    width: 60px;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 3px;
}

strong {
  display: block;
  margin-bottom: 5px;
  font-size: 16px;
}

/* Style for the submit button */
.button {
  display: block;
  width: 100%;
  max-width: 200px;
  margin: 20px auto;
  padding: 10px;
  border-radius: 5px;
  background-color: #4CAF50;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

.button:hover {
  background-color: #3e8e41;
}
#cart {
    margin-top: 2rem;
}

#cart h2 {
    margin-bottom: 1rem;
}

#cart-add {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1.5rem;
}

#coupon {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#coupon h3 {
    margin-bottom: 1rem;
}

#coupon input[type="text"] {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-right: 0.5rem;
}

#coupon button {
    padding: 0.5rem 1rem;
    background-color: #46b8de;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-top: 0.5rem;
}

#coupon button:hover {
    background-color: #066eaa;
}
select {
  font-size: 1rem;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  box-shadow: none;
}

select:focus {
  outline: none;
  border-color: #0077cc;
  box-shadow: 0 0 0 2px rgba(0, 119, 204, 0.2);
}





</style>
</html>