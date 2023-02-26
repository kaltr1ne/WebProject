<?php
// require_once('../adminFunctions/controlAccess.php');
require_once('../crud/productCrud.php');

$productCrud = new productCrud();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produktet | Lovesac</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
  <link rel="stylesheet" href="adminDashboard.css" />
  <link rel="stylesheet" href="messageStyle.css" />
</head>

<body>

  <?php include 'adminHeader.php' ?>

  <div class="containerDashboardP">
    <?php
    if (isset($_SESSION['mesazhiMeSukses'])) {
      ?>
      <div class="mesazhiSuksesStyle">
        <h3>Produkti u editua me sukses!</h3>
        <button id="mbyllMesazhin">
          X
        </button>
      </div>
      <?php
    }
    if (isset($_SESSION['mesazhiFshirjesMeSukses'])) {
      ?>
      <div class="mesazhiSuksesStyle">
        <h3>Produkti u fshi me sukses!</h3>
        <button id="mbyllMesazhin">
          X
        </button>
      </div>
      <?php
    }
    if (isset($_SESSION['skeAksesAdmin'])) {
      ?>
      <div class="mesazhiGabimStyle">
        <h3>Nuk keni akses per kete sherbim!</h3>
        <button id="mbyllMesazhin">
          X
        </button>
      </div>
      <?php
    }
    ?>
    <h1>Produktet</h1>
    <table>
      <tr>
        <th>ID </th>
        <th>Emri i Produktit</th>
        <th>Foto</th>
        <th>Qmimi i Produktit</th>
        <th>Pershkrimi i produktit</th>
        <th>Funksioni</th>
      </tr>
      <?php
      $products = $productCrud->shfaqTeGjithaProduktet();

      foreach ($products as $product) {
        ?>
        <tr>
          <td>
            <?php echo $product['products_ID'] ?>
          </td>
          <td class="emriP"><?php echo $product['title'] ?></td>
          <td><img src="../img/<?php echo $product['image'] ?>"></td>
          <td><?php echo $product['price'] ?></td>
          <td>
            <?php echo $product['description'] ?>
          </td>
          <td><a
                href="editProduct.php?products_ID=<?php echo $product['products_ID'] ?>"><strong>Edito</a></button>
            <a
                href="deleteProduct.php?products_ID=<?php echo $product['products_ID'] ?>"><strong>Fshij</a></button>
          </td>
        </tr>
        <?php
      }
      ?>
      </th>
    </table>
    <button class="shto"><a href="addProduct.php">Shto Produkt</a></button>
  </div>

  <?php
  include '../footer1.php';
  include('../functions/scripts.php') ?>
</body>
<style>
.shto {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  color: #fff;
  background-color: #46b8de;
  border-radius: 5px;
  border: none;
  cursor: pointer;
}

.shto:hover {
  background-color: #084d81;
}</style>
</html>

<?php
unset($_SESSION['mesazhiMeSukses']);
unset($_SESSION['mesazhiFshirjesMeSukses']);
unset($_SESSION['skeAksesAdmin']);
?>