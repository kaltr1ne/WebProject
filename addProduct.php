<?php
//require_once('../adminFunctions/controlAccess.php');
require_once('../crud/productCrud.php');

$productCrud= new productCrud();

if (!isset($_SESSION)) {
  session_start();
}

if (isset($_POST['shtoProd'])) {
  $_SESSION['title'] = $_POST['title'];
  $_SESSION['image'] = $_FILES['image'];
  $_SESSION['description'] = $_POST['description'];
  $_SESSION['price'] = $_POST['price'];

  $productCrud->shtoProduktin();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovesac</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="forms.css">
    <link rel="stylesheet" href="messagesStyle.css">
    <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/circle-xmark?s=solid&f=classic">
    <script src="https://kit.fontawesome.com/3880c5a2c3.js" crossorigin="anonymous"></script>
</head>
<body>
  
<?php include 'adminHeader.php' ?>
  <div class="forms">
    <form name="shtoProduktin" onsubmit="return validimiShtimiProduktit();" action='' method="POST"
      enctype="multipart/form-data">
      <?php
      if (isset($_SESSION['mesazhiMeSukses'])) {
        ?>
        <div class="mesazhiSuksesStyle">
          <p>Produkti u shtua me sukses!</p>
          <button id="mbyllMesazhin">
            X
          </button>
        </div>
        <?php
      }
      if (isset($_SESSION['madhesiaGabim'])) {
        ?>
        <div class="mesazhiGabimStyle">
          <p>Madhesia e fotos eshte shume e madhe!</p>
          <button id="mbyllMesazhin">
            X
          </button>
        </div>
        <?php
      }
      if (isset($_SESSION['madhesiaGabim'])) {
        ?>
        <div class="mesazhiGabimStyle">
          <p>Madhesia e fotos eshte shume e madhe!</p>
          <button id="mbyllMesazhin">
            X
          </button>
        </div>
        <?php
      }
      if (isset($_SESSION['fileNukSuportohet'])) {
        ?>
        <div class="mesazhiGabimStyle">
          <p>Ky file nuk supportohet!</p>
          <button id="mbyllMesazhin">
            X
          </button>
        </div>
        <?php
      }
      ?>
      
      <h1 class="form-title">Vendosja e Produkteve</h1>
      <input class="form-input" name="title" type="text" placeholder="Emri i Produktit" required>
      <input class="form-input" name="image" accept="image/*" type="file" value="Foto e Produktit" required>
      <input class="form-input" name="description" type="text" placeholder="Pershkrimi i Produktit" required>
      <input class="finput" name="price" type="text" placeholder="Qmimi i Produktit" required>
      <input class="button" type="submit" value="Shtoni Produktin" name='shtoProd'>
    </form>
  </div>
  <?php include('../functions/scripts.php') ?>
</body>
<?php include ('footer1.php'); ?>
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
<?php
unset($_SESSION['mesazhiMeSukses']);
unset($_SESSION['madhesiaGabim']);
unset($_SESSION['problemNeBartje']);
unset($_SESSION['fileNukSuportohet']);
?>