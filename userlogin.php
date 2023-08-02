<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php") ?>

</head>
<body>
<?php include("header.php");  ?>
<div class="container">
    <div class="col-md-12 col-12">
        <form method="post" id="frmUserLogin" action="userloginaction.php">
            <h1 class="text-center text-success">USER LOGIN</h1>
            <div class="col-md-6 col-6 offset-3">
                <label class="mt-3">Enter Email</label>
                <input type="email" name="email" id="email" class="form-control" data-rule-required="true" data-msg-required="Please Enter Email">
                <label class="mt-3">Enter Password</label>
                <input type="password" name="password" id="password" class="form-control" data-rule-required="true" data-msg-required="Please Enter
            Password">
                <button type="submit" class="btn btn-success m-3">Login</button>
                <p class="fpass"><a href="forgotpassword.php">FORGOT PASSWORD???</a></p>
                <p class="text-center m-3">
                    <?php
                    if(isset($_GET['err'])){
                    ?>
                <div class='alert alert-danger'>
                    <?php
                    echo $_GET['err'];
                    ?>
                </div>
                <?php
                }
                ?>
                </p>
            </div>
        </form>
    </div>
</div>
<?php include("footer.php"); ?>

<script>
    $(document).ready(function(){
        $('#frmUserLogin').validate();
    })
</script>
<style>
    .fpass{
        font-size:13px;
        text-align: right;
    }
</style>
</body>
</html>
