<?php
session_start();
session_destroy();
header("location: https://watch-selling.herokuapp.com/index.php");
