<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "watch";
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'UTF8');

$sqlAdd = "insert into shoppingcart(idproduct) values ('" . $_POST[''] . "')";
$query12 = mysqli_query($conn, $sqlAdd);
