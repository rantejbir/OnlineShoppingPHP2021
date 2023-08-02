<?php
//ob_start();
session_start();

if(!isset($_SESSION['ADMINEMAIL'])){
    header("Location:adminlogin.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php"); ?>
</head>
<body>
<?php include("adminheader.php"); ?>
<div class="container">
    <h1 class="text-success">Welcome, Admin</h1>
</div>
<?php include("footer.php"); ?>
</body>
</html>
