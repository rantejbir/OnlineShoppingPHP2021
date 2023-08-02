<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include("headerfiles.php"); ?>
</head>
<body>
<?php include("header.php"); ?>
<div class="container">
    <div class="col-md-6 col-6 offset-3">
        <form method="post" id="frmUserResetPassword" action="resetpasswordaction.php">
            <h1 class="text-center text-success">RESET PASSWORD</h1>
            <label class="mt-3">Email ID</label>
            <input type="email" readonly name="email" class="form-control" value="<?php echo $_GET['email'] ?>">
            <label>Enter Password</label>
            <input type="password" name="password" id="password" class="form-control" data-rule-required="true" data-msg-required="Please Enter
            Password">
            <label class="mt-3">Confirm Password</label>
            <input type="password" name="cpassword" id="cpassword" class="form-control" data-rule-equalto="#password"
                   data-msg-equalto="Mismatch Password">
            <button type="submit" class="btn btn-success mt-4 mb-4">Submit</button>
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
        </form>
    </div>
</div>
<?php include("footer.php"); ?>
<script>
    $(document).ready(function(){
        $('#frmUserResetPassword').validate();
    })
</script>
</body>
</html>