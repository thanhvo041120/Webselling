<?php
session_start();
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "watch";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "select * from client where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
$query = mysqli_query($conn, $sql);
$count = mysqli_num_rows($query);
if ($count == 1) {
  $isAuth = "true";
  header("location: https://watch-selling.herokuapp.com/logout.php?isAuth=" . $isAuth);
} else {
  $isAuth = "false";
  header("location: https://watch-selling.herokuapp.com/log-in.php?isAuth=" . $isAuth);
}
