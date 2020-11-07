<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
  header("location:logout.php");
} else {

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Watch</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="icon" href="img/favicon.png" sizes="16x16" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/body.css" />
  </head>

  <body style="background:url(img/background.jpg); background-size: 730px 700px; background-repeat:repeat-x">
    <?php
    include 'view/headerlogin.php';
    ?>
    <?php
    include 'view/bodyLog-in.php';
    ?>
    <?php
    include 'view/footer.php';
    ?>

  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </html>

<?php } ?>