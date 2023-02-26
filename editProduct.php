<?php
// require_once('../adminFunctions/controlAccess.php');
require_once('../crud/productCrud.php');

$productCrud = new productCrud();

$productCrud->setProducts_ID($_GET['products_ID']);
$product = $productCrud->shfaqProduktinSipasID();
if (!isset($_SESSION)) {
  session_start();
}
if (isset($_POST['editoProd'])) {
  $_SESSION['products_ID'] = $_GET['products_ID'];
  $_SESSION['title'] = $_POST['title'];
  $_SESSION['price'] = $_POST['price'];
  if ($_FILES['image']['nameImage'] == '') {
    $productCrud->editoProduktin(false);
  } else {
    $_SESSION['image'] = $_FILES['image'];
    $_SESSION['EmriFotosProduktit'] = $_FILES['image']['nameImage'];
    $productCrud->editoProduktin(true);
  }
}
if (isset($_POST['anulo'])) {
  echo '<script>document.location="../shop.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Editimi i Produktiti | Tech Store</title>
  <link rel="stylesheet" href=".../messagesStyle.css" />
  <link rel="stylesheet" href="../forms.css" />
  <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
</head>

<body>
<?php include 'adminHeader.php' ?>
  <div class="forms">
    <form name="editoProduktin" onsubmit="" action='' method="POST" enctype="multipart/form-data">
      <h1 class="form-title">Editimi i Produktit</h1>
      <input class="form-input" name="title" type="text" placeholder="Emri i Produktit"
        value='<?php echo $product['title'] ?>' required>


      <input class="form-input" name="image" accept="image/*" type="file" placeholder="Foto Produktit">
      <input class="form-input" name="price" type="text" placeholder="Qmimi i Produktit"
        value='<?php echo $product['price'] ?>' required>
      <div>
        <input class="button" type="submit" value="Editoni Produktin" name='editoProd'>
        <input class="button" type="submit" value="Anulo" name='anulo'>
      </div>
    </form>
  </div>
  <script src="../script1.js"></script>
  <script src="../closeMessage.js"></script>
  <?php include '../footer1.php'; ?>
</body>
<style>
  body {
    background-color: white;
}

.forms {
  background-color: #46b8de;
  display: flex;
  justify-content: space-between;
  flex-basis: 120em;
  align-items: center;
  flex-wrap: wrap;
  border-radius: 25px;
  width: fit-content;
  margin: auto;
  margin-top: 7em;
  margin-bottom: 7em;
  -webkit-box-shadow: 0 0 20px #46b8de;
  box-shadow: 0 0 20px #46b8de;
  padding: 3em 2em;
}

form {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  gap: 1.4em;
  width: 100%;
}

.form-title {
  color: #fff;
  font-weight: 500;
  margin-bottom: 15px;
}

.forms table {
  color: white;
}

input {
  color: #fff;
  background-color: inherit;
  border: none;
  border-bottom: 1px solid white;
  outline: none;
  width: max(27em, 20vw);
  padding: 10px;
  color: white;
}

::placeholder {
  color: white;
}

textarea {
  width: max(27em, 20vw);
  height: max(10em);
  resize: none;
  background-color: inherit;
  border: none;
  border-bottom: 1px solid white;
  color: white;
  padding: 10px;
}

input.mesazhi {
  padding: 2em;
  padding-left: 10px;
}

.button {
  border: none;
  background-color: white;
  color: black;
  padding: 1em 3em;
  width: auto;
  border-radius: 25px;
  margin-top: 1em;
}

.reg {
  margin: 9px 12px;
  color: white;
}

.reg a {
  color: rgb(31, 118, 175);
}

.reg a:hover {
  color: #0497eb;
  font-weight: bold;
}

.button:hover {
  background: #0497eb;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
}

label {
  color: white;
}

::-webkit-file-upload-button {
  background: white;
  border: none;
  border-radius: 20px;
  color: grey;
  padding: 0.5em;
  cursor: pointer;
}
::-webkit-file-upload-button:hover {
  background:#0497eb;
  color: #fff;
  cursor: pointer;
}

.dropdown {
  background: white;
  outline: none;
  border: none;
  border-radius: 20px;
  color: grey;
  padding: 0.5em 1em;
  cursor: pointer;
}
.dropdown1 {
  background: white;
  outline: none;
  border: none;
  border-radius: 20px;
  color: grey;
  padding: 0.5em 1.3em;
  cursor: pointer;
}

@media (max-width: 380px) {
  .forms {
    margin-top: 3em;
    margin-bottom: 0;
  }

  textarea {
    width: 15em;
    height: 6em;
  }

  input {
    width: 15em;
  }
}

@media (max-width: 1024px) {
  .auth {
    top: 193px;
  }
}
</style>

</html>
