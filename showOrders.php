<?php
if (!isset($_SESSION)) {
  session_start();
}

// require_once('../adminFunctions/controlAccess.php');
require_once('../crud/buyNowCrud.php');

$buyNowCrud = new buyNowCrud();
$contactForm = $buyNowCrud->showOrders();
?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagess | Lovesac</title>
    <link rel="stylesheet" href="../mesazhet.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/circle-xmark?s=solid&f=classic">
    <script src="https://kit.fontawesome.com/3880c5a2c3.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include 'adminHeader.php' ?>
  <div class="containerDashboardP">
    <?php
    if (isset($_SESSION['mezashiUKonfirmua'])) {
      ?>
      <div class="mesazhiSuksesStyle">
        <p>Mesazhi u konfirmua me sukses!</p>
        <button id="mbyllMesazhin">
          X
        </button>
      </div>
      <?php

    }
    ?>
    <h1>Order List</h1>
    <table>
      <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Username</th>
        <th>Email</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Color</th>
        <th>Coupon</th>

      </tr>
      <?php
      $orders = $buyNowCrud->showOrders();

      foreach ($orders as $order) {
        ?>
        <tr>
          <td>
            <?php echo $order['name'] ?>
          </td>
          <td class="emriK"><?php echo $order['surname'] ?></td>
          <td><?php echo $order['email'] ?></td>
          <td>
            <?php echo $order['username'] ?>
          </td>
          <td>
            <?php echo $order['address'] ?>
          </td>
          <td>
            <?php echo $order['contactNumber'] ?>
          </td>
          <td>
            <?php echo $order['emriProduktit'] ?>
          </td>
          <td>
            <?php echo $order['sasia'] ?>
          </td>
          <td>
            <?php echo $order['ngjyra'] ?>
          </td>
          <td>
            <?php echo $order['coupon'] ?>
          </td>

        </tr>
        <?php
      }
      ?>
      </th>
    </table>
  </div>

  <?php
  include '../footer1.php';
  include('../functions/scripts.php') ?>
</body>

</html>
<?php unset($_SESSION['mezashiUKonfirmua']) ?>