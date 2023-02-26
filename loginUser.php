<?php
require('../crud/userCrud.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['login'])) {
    $userCrud = new userCrud();
    $userCrud->setUsername($_POST['username']);
    $kontrolloUser = $userCrud->kontrolloUser();


    if ($kontrolloUser == true) {
        $userCrud->setPassword($_POST['password']);
        $kontrolloLlogarin = $userCrud->kontrolloLlogarin();

        if ($kontrolloLlogarin == true) {
            $_SESSION['aksesi'] = $kontrolloLlogarin['aksesi'];
            $_SESSION['userID'] = $kontrolloLlogarin['userID'];
            $_SESSION['name'] = $kontrolloLlogarin['emri'];
            $_SESSION['email'] = $kontrolloLlogarin['email'];
            echo "<script>document.location='../index.php'</script>";
        } else {
            $_SESSION['passGabim'] = true;
            echo "<script>document.location='../login.php'</script>";
        }
    } else {
        $_SESSION['uNameGabim'] = true;
        echo "<script>document.location='../login.php'</script>";
    }
}
?>
