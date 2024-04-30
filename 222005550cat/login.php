<?php
// Connect to database (replace dbname, username, Password with actual credentials)
require_once "databaseconnection.php";
//niyonshuti jean pierre 2222003223 on 9th april 2024

$uname = $_POST['username'];
$Password = $_POST['Password'];

$sql = "SELECT *FROM fuel_admin WHERE username='$uname' AND Password='$Password'";
$result =$connection->query($sql);
if ($result->num_rows >0) {
  // echo "successfully loggedin!";
  header("Location: dashboardfuel_admin.html");
      exit();
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>
