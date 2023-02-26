<?php
// with the appropriate credentials
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "lovesac";

// Krijimi lidhjes
$dbConnect = new mysqli($host, $dbUsername, $dbPassword, $dbname);

// Kontrolli lidhjes
if ($dbConnect->connect_error) {
  die("Connection failed: " . $dbConnect->connect_error);
}
// Marrja e te dhenave nga register form
$username = $_POST["username"];
$password = $_POST["password"];

// Sanitize the input to prevent SQL injection attacks
$username = mysqli_real_escape_string($dbConnect, $username);
$password = mysqli_real_escape_string($dbConnect, $password);

// Queri për të kontrolluar nëse përdoruesi ekziston në bazën e të dhënave
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password' AND aksesi = 0" ;

$result = $dbConnect->query($sql);

if ($result->num_rows > 0) {
  header("Location: dashboard.php");
} else {
  header("Location: ../error/404.php");
}

$dbConnect->close();
?>