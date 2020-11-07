<?php
session_start();
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "watch";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$_sqlselect = "select * from client where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
$query = mysqli_query($conn, $_sqlselect);
$count = mysqli_num_rows($query);

if ($count == 0) {
  $_sql = "insert into client(username, password, email) values ('" . $_POST['username'] . "','" . $_POST['password'] . "','" . $_POST['email'] . "')";
  $_query = mysqli_query($conn, $_sql);
  header("location: https://watch-selling.herokuapp.com/log-in.php");
} else {
  header("location: https://watch-selling.herokuapp.com/sign-up.php");
}
