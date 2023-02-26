<?php
//require_once('../adminFunctions/controlAccess.php');
require_once('../crud/userCrud.php');

$userCrud = new userCrud();

if (isset($_GET['userID'])) {
  $userCrud->setUserID($_GET['userID']);
  $useri = $userCrud->shfaqSipasID();

  $userCrud->setUserID($_GET['userID']);
  $userCrud->setEmri($_GET['emri']);
  $userCrud->setMbiemri($_GET['mbiemri']);
  if (isset($_GET['aksesi'])) {
    $userCrud->setAksesi($_GET['aksesi']);
    $userCrud->perditesoTeDhenatAdmini(true);
  } else {
    $userCrud->perditesoTeDhenatAdmini(false);
  }

  $_SESSION['aksesiUPerditesua'] = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perdoruesit | Lovesac</title>
  <link rel="shortcut icon" type="x-icon" href="img/logo/logo_200x200.png">
  <link rel="stylesheet" href="adminDashboard.css" />
  <link rel="stylesheet" href="messagesStyle.css" />
</head>

<body>

  <?php include 'adminHeader.php' ?>

  <div class="containerDashboardP">
    <?php
    if (isset($_SESSION['aksesiUPerditesua'])) {
      ?>
      <div class="mesazhiSuksesStyle">
        <p>Llogaria u ndryshua!</p>
        <button id="mbyllMesazhin">
          X
        </button>
      </div>
      <?php
    }
    ?>
    <h1>Lista e Perdoruesve</h1>
    <table>
      <tr>
        <th>Klienti_ID</th>
        <th>Emri</th>
        <th>Email</th>
      </tr>
      <?php
      $users = $userCrud->shfaqTeGjithePerdoruesit();

      foreach ($users as $user) {
        ?>
        <tr>
          <td id="userID_<?php echo $user['userID'] ?>"><?php echo $user['userID'] ?></td>
          <td id="emri_<?php echo $user['emri'] ?>"><?php echo $user['emri'] ?></td>
          <td id="email_<?php echo $user['email'] ?>"><?php echo $user['email'] ?></td>
          
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

<script>
  function ndryshoTeDhenat(idUser) {
    const emREGEX = /^[A-Za-z]+$/
    var userID = document.getElementById("userID_" + idUser).innerHTML;
    var emri = document.getElementById("emri_" + idUser).value;
    var mbiemri = document.getElementById("mbiemri_" + idUser).value;
    var aksesi = document.getElementById("aksesi_" + idUser).value;

    if (emri == "") {
      alert("Emri nuk duhet te jet i zbrazet!");
      emri.focus();
      return false;
    }

    else if (mbiemri == "") {
      alert("Mbiemri nuk duhet te jet i zbrazet!");
      mbiemri.focus();
      return false;
    }

    else {
      if (aksesi == null) {
        var link = "?userID=" + userID + "&emri=" + emri + "&mbiemri=" + mbiemri;
      }
      else {
        var link = "?userID=" + userID + "&emri=" + emri + "&mbiemri=" + mbiemri + "&aksesi=" + aksesi;
      }
      window.location.href = link;

      return true;
    }
  }
</script>

<?php
unset($_SESSION['aksesiUPerditesua']);
?>